<?php

// ===========================
// カスタム投稿タイプ「例会情報」の登録
// ===========================

/**
 * カスタム投稿タイプ「例会情報」を登録する
 */
function create_event_post_type()
{
    register_post_type('event', [
        'labels' => [
            'name' => '例会情報',
            'singular_name' => '例会',
            'add_new' => '新しい例会を追加',
            'add_new_item' => '新しい例会情報を追加',
            'edit_item' => '例会情報を編集',
            'new_item' => '新しい例会情報',
            'view_item' => '例会情報を見る',
            'search_items' => '例会情報を検索',
            'not_found' => '例会情報が見つかりません',
            'not_found_in_trash' => 'ゴミ箱に例会情報はありません',
            'all_items' => 'すべての例会情報',
            'menu_name' => '例会情報',
            'name_admin_bar' => '例会情報'
        ],
        'public' => true,
        'publicly_queryable' => false,
        'has_archive' => false,
        'rewrite' => false,
        'menu_position' => 5,
        'supports' => ['title', 'custom-fields'],
        'show_in_rest' => true
    ]);
}
add_action('init', 'create_event_post_type');

// ===========================
// カスタム投稿ステータス「アーカイブ済み」「予約投稿（future）」の登録
// ===========================

function register_custom_post_statuses()
{
    register_post_status('archived', [
        'label'                     => 'アーカイブ済み',
        'public'                    => false,
        'internal'                  => false,
        'exclude_from_search'       => true,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop('アーカイブ済み (%s)', 'アーカイブ済み (%s)'),
    ]);

    register_post_status('future', [
        'label'                     => '予約投稿',
        'public'                    => false,  // フロントエンドで取得可能
        'internal'                  => false,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop('予約投稿 (%s)', '予約投稿 (%s)'),
    ]);
}
add_action('init', 'register_custom_post_statuses');


// ===========================
// カスタムステータスを投稿編集画面に追加
// ===========================

/**
 * 「公開」メタボックスにカスタムステータスを追加する
 */
function append_custom_post_status_to_dropdown()
{
    global $post;
    if ($post->post_type === 'event') {
?>
        <script>
            jQuery(document).ready(function($) {
                let statusDropdown = $("select#post_status");
                if (statusDropdown.length) {
                    // 既にオプションが存在するかチェック
                    if (statusDropdown.find("option[value='archived']").length === 0) {
                        statusDropdown.append('<option value="archived" <?php selected($post->post_status, "archived"); ?>>アーカイブ済み</option>');
                    }
                    if (statusDropdown.find("option[value='future']").length === 0) {
                        statusDropdown.append('<option value="future" <?php selected($post->post_status, "future"); ?>>予約投稿</option>');
                    }
                }
            });
        </script>
<?php
    }
}
add_action('admin_footer-post.php', 'append_custom_post_status_to_dropdown');
add_action('admin_footer-post-new.php', 'append_custom_post_status_to_dropdown');


// ===========================
// 投稿一覧にカスタムステータスを表示
// ===========================

/**
 * 投稿一覧画面にカスタムステータスを正しく表示する
 */
function display_custom_status_in_admin($post_states, $post)
{
    if ('archived' === get_post_status($post->ID)) {
        $post_states[] = 'アーカイブ済み';
    }
    if ('future' === get_post_status($post->ID)) {
        $post_states[] = '予約投稿';
    }
    return $post_states;
}
add_filter('display_post_states', 'display_custom_status_in_admin', 10, 2);


// ===========================
// 投稿保存時にカスタムステータスを保存
// ===========================

/**
 * 投稿が保存されたときにカスタムステータスを適用する
 */
function save_custom_post_status($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['post_status'])) {
        $new_status = sanitize_text_field($_POST['post_status']);

        if (get_post_status($post_id) !== $new_status) {
            // 無限ループ防止
            remove_action('save_post', 'save_custom_post_status');
            
            wp_update_post([
                'ID'          => $post_id,
                'post_status' => $new_status
            ]);

            add_action('save_post', 'save_custom_post_status');
            
            error_log("投稿 ID {$post_id} のステータスを {$new_status} に変更しました。");
        }
    }
}
add_action('save_post', 'save_custom_post_status');


// ===========================
// 投稿フィルタードロップダウンにカスタムステータスを追加
// ===========================

/**
 * 投稿一覧のステータスフィルターにカスタムステータスを追加する
 */
function add_custom_status_to_admin_filter()
{
    global $post_type;
    if ($post_type === 'event') {
        $selected = isset($_GET['post_status']) ? $_GET['post_status'] : '';
?>
        <select name="post_status">
            <option value="">すべてのステータス</option>
            <option value="publish" <?php selected($selected, 'publish'); ?>>公開</option>
            <option value="future" <?php selected($selected, 'future'); ?>>予約投稿</option>
            <option value="archived" <?php selected($selected, 'archived'); ?>>アーカイブ済み</option>
        </select>
<?php
    }
}
add_action('restrict_manage_posts', 'add_custom_status_to_admin_filter');

/**
 * 投稿タイプ「例会情報」の一覧で「すべてのステータス」に正しい動作を設定する
 */
function include_all_status_in_event_list($query)
{
    if (!is_admin() || !$query->is_main_query()) {
        return;
    }

    // クエリの対象が「例会情報」の場合
    if ($query->get('post_type') === 'event') {
        $post_status = $query->get('post_status');

        // すでに `future` や `archived` が含まれている場合は変更しない
        if (empty($post_status) || $post_status === 'all') {
            $query->set('post_status', [
                'publish',  // 公開済み
                'future',   // 予約投稿
                'draft',    // 下書き
                'pending',  // レビュー待ち
                'private',  // 非公開
                'archived'  // カスタムステータス「アーカイブ済み」
            ]);
        }
    }
}
add_action('pre_get_posts', 'include_all_status_in_event_list');

