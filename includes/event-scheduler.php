<?php
// ===========================
// 表示開始日時と表示終了日時に基づいて投稿ステータスを変更
// ===========================

function schedule_event_status_update() {
    $current_datetime = current_time('Y-m-d H:i:s');

    // 1. 表示開始日時が未来の投稿を「future」にする
    $events_to_future = get_posts([
        'post_type'   => 'event',
        'post_status' => ['publish', 'draft', 'pending'], // 公開 or 下書き or レビュー待ち
        'meta_query'  => [
            [
                'key'     => 'start_datetime',
                'value'   => $current_datetime,
                'compare' => '>',
                'type'    => 'DATETIME'
            ]
        ],
        'fields' => 'ids'
    ]);

    if (!empty($events_to_future)) {
        foreach ($events_to_future as $event_id) {
            wp_update_post([
                'ID'          => $event_id,
                'post_status' => 'future' // 未来の投稿としてマーク
            ]);
        }
    }

    // 2. 表示開始日時を迎えた投稿を「公開」に変更
    $events_to_publish = get_posts([
        'post_type'   => 'event',
        'post_status' => ['future', 'draft', 'pending'], // まだ公開されていない投稿
        'meta_query'  => [
            [
                'key'     => 'start_datetime',
                'value'   => $current_datetime,
                'compare' => '<=',
                'type'    => 'DATETIME'
            ],
            [
                'key'     => 'end_datetime',
                'value'   => $current_datetime,
                'compare' => '>=',
                'type'    => 'DATETIME'
            ]
        ],
        'fields' => 'ids'
    ]);

    if (!empty($events_to_publish)) {
        foreach ($events_to_publish as $event_id) {
            wp_update_post([
                'ID'          => $event_id,
                'post_status' => 'publish' // 公開に変更
            ]);
        }
    }

    // 3. 表示終了日時を迎えた投稿を「アーカイブ済み」に変更
    $events_to_archive = get_posts([
        'post_type'   => 'event',
        'post_status' => 'publish', // 公開中の投稿のみ対象
        'meta_query'  => [
            [
                'key'     => 'end_datetime',
                'value'   => $current_datetime,
                'compare' => '<=',
                'type'    => 'DATETIME'
            ]
        ],
        'fields' => 'ids'
    ]);

    if (!empty($events_to_archive)) {
        foreach ($events_to_archive as $event_id) {
            wp_update_post([
                'ID'          => $event_id,
                'post_status' => 'archived' // "アーカイブ済み" に変更
            ]);
        }
    }
}

// ===========================
// スケジュールイベントの設定（1時間ごとにチェック）
// ===========================
if (!wp_next_scheduled('check_event_status')) {    
    wp_schedule_event(time(), 'hourly', 'check_event_status');    
}
add_action('check_event_status', 'schedule_event_status_update');

// ===========================
// 「アーカイブ済み」「公開」「未来の投稿」を一覧に含める
// ===========================

function include_valid_status_in_admin($query) {
    if (!is_admin() || !$query->is_main_query() || $query->get('post_type') !== 'event') {
        return;
    }

    // ステータスが指定されていない場合は "publish" "future" "archived" を表示
    $post_status = $query->get('post_status');
    if (empty($post_status) || $post_status === 'any') {
        $query->set('post_status', ['publish', 'future', 'archived']);
    }
}
add_action('pre_get_posts', 'include_valid_status_in_admin');
