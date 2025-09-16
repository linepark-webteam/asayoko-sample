<?php
// ===========================
// 必須フィールドの入力確認
// ===========================

/**
 * フィールドのバリデーションを行い、エラーがあれば投稿保存を中断する。
 */
function validate_event_meta_fields($post_id, $post)
{
    if ($post->post_type !== 'event') {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // 必須フィールドの定義
    $required_fields = [
        'start_date' => '表示開始日',
        'start_time' => '表示開始時刻',
        'end_date'   => '表示終了日',
        'end_time'   => '表示終了時刻',
        'url'        => 'URL'
    ];

    $errors = [];

    // 必須フィールドのチェック
    foreach ($required_fields as $field => $label) {
        if (empty($_POST[$field])) {
            $errors[] = sprintf('%s は必須です。', $label);
        }
    }

    // エラーがあれば保存を中断
    if (!empty($errors)) {
        set_transient('event_meta_errors_' . $post_id, $errors, 30);
        remove_action('save_post', 'save_event_meta_fields'); // 保存を中断
        return;
    }
}
add_action('save_post', 'validate_event_meta_fields', 10, 2);

// ===========================
// エラーメッセージを管理画面に表示
// ===========================

/**
 * 保存時のエラーを管理画面に表示する。
 */
function display_event_meta_errors()
{
    global $post;

    if ($post && get_post_type($post) === 'event') {
        $errors = get_transient('event_meta_errors_' . $post->ID);

        if (!empty($errors)) {
            echo '<div class="notice notice-error"><ul>';
            foreach ($errors as $error) {
                echo '<li>' . esc_html($error) . '</li>';
            }
            echo '</ul></div>';

            // エラー表示後に削除
            delete_transient('event_meta_errors_' . $post->ID);
        }
    }
}
add_action('admin_notices', 'display_event_meta_errors');

// ===========================
// フィールドの保存
// ===========================

/**
 * 投稿が保存されるときにカスタムフィールドを保存する。
 */
function save_event_meta_fields($post_id)
{
    if (get_post_type($post_id) !== 'event') {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // フィールドを保存
    $start_date = isset($_POST['start_date']) ? sanitize_text_field($_POST['start_date']) : '';
    $start_time = isset($_POST['start_time']) ? sanitize_text_field($_POST['start_time']) : '';

    $end_date = isset($_POST['end_date']) ? sanitize_text_field($_POST['end_date']) : '';
    $end_time = isset($_POST['end_time']) ? sanitize_text_field($_POST['end_time']) : '';

    // start_time が `H:i` のみだった場合、秒を補完
    if (!empty($start_time) && preg_match('/^\d{2}:\d{2}$/', $start_time)) {
        $start_time .= ':00'; // 秒を補完
    }

    if (!empty($end_time) && preg_match('/^\d{2}:\d{2}$/', $end_time)) {
        $end_time .= ':59'; // 秒を補完
    }

    if (!empty($start_date)) {
        update_post_meta($post_id, 'start_date', $start_date);
    }
    if (!empty($start_time)) {
        update_post_meta($post_id, 'start_time', $start_time);
    }

    if (!empty($end_date)) {
        update_post_meta($post_id, 'end_date', $end_date);
    }
    if (!empty($end_time)) {
        update_post_meta($post_id, 'end_time', $end_time);
    }

    // `start_datetime` と `end_datetime` を作成
    if (!empty($start_date) && !empty($start_time)) {
        $start_datetime = $start_date . ' ' . $start_time;
        update_post_meta($post_id, 'start_datetime', $start_datetime);
    }

    if (!empty($end_date) && !empty($end_time)) {
        $end_datetime = $end_date . ' ' . $end_time;
        update_post_meta($post_id, 'end_datetime', $end_datetime);
    }
}
add_action('save_post', 'save_event_meta_fields', 20);


// ===========================
// カスタム投稿「例会情報」のパーマリンク削除
// ===========================

/**
 * 投稿一覧画面から「表示」リンクを削除する。
 */
function remove_view_link($actions, $post)
{
    if (is_admin() && get_post_type($post) === 'event') {
        unset($actions['view']);
    }
    return $actions;
}
add_filter('post_row_actions', 'remove_view_link', 10, 2);

/**
 * 投稿編集画面のパーマリンク入力エリアを非表示にする。
 */
function remove_event_permalink()
{
    $screen = get_current_screen();
    if ($screen->post_type === 'event') {
        echo '<style>#edit-slug-box { display: none; }</style>';
    }
}
add_action('edit_form_after_title', 'remove_event_permalink');

// 編集画面のパーマリンク部分をTOPページにカスタマイズ
function customize_event_permalink_display()
{
    global $post;
    if ($post->post_type === 'event') {
        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    const slugBox = document.getElementById("edit-slug-box");
                    if (slugBox) {
                        slugBox.innerHTML = `<span class="sample-permalink"><a href="' . home_url('/') . '" target="_blank">' . home_url('/') . '</a></span>`;
                    }
                });
              </script>';
    }
}
add_action('edit_form_after_title', 'customize_event_permalink_display');
