<?php
// カスタムフィールドの有効化
function enable_custom_fields() {
    add_post_type_support('post', 'custom-fields'); // 標準投稿タイプ
    add_post_type_support('event', 'custom-fields'); // カスタム投稿タイプ「例会情報」
}
add_action('init', 'enable_custom_fields');

// メタボックスを追加
function add_event_meta_boxes() {
    add_meta_box(
        'event_details',
        '例会情報の詳細',
        'render_event_meta_box',
        'event',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_event_meta_boxes');

// メタボックスのHTMLをレンダリング
function render_event_meta_box($post) {
    $start_date = get_post_meta($post->ID, 'start_date', true);
    $start_time = get_post_meta($post->ID, 'start_time', true) ?: '09:00:00';
    $end_date = get_post_meta($post->ID, 'end_date', true);
    $end_time = get_post_meta($post->ID, 'end_time', true) ?: '08:59:59';
    $url = get_post_meta($post->ID, 'url', true);
    ?>
    <label for="start_date">表示開始日</label>
    <input type="date" id="start_date" name="start_date" value="<?php echo esc_attr($start_date); ?>" style="width: 100%; margin-bottom: 1em;">
    <label for="start_time">表示開始時刻</label>
    <input type="time" id="start_time" name="start_time" step="1" value="<?php echo esc_attr($start_time); ?>" style="width: 100%; margin-bottom: 1em;">
    <label for="end_date">表示終了日</label>
    <input type="date" id="end_date" name="end_date" value="<?php echo esc_attr($end_date); ?>" style="width: 100%; margin-bottom: 1em;">
    <label for="end_time">表示終了時刻</label>
    <input type="time" id="end_time" name="end_time" step="1" value="<?php echo esc_attr($end_time); ?>" style="width: 100%; margin-bottom: 1em;">
    <label for="url">URL</label>
    <input type="url" id="url" name="url" value="<?php echo esc_attr($url); ?>" style="width: 100%; margin-bottom: 1em;">
    <?php
}