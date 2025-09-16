<?php
// CSSとJSの登録（ページごとに読み込む）

function enqueue_asayoko_scripts() {
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/css/ress.min.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', [], null, true);
    wp_enqueue_style('my-bootstrap-style', get_template_directory_uri() . '/css/my-bootstrap.css');
    wp_enqueue_style('common-style', get_template_directory_uri() . '/css/common.css');


    $page_assets = [
        'front' => [
            'css' => ['top-style' => '/css/top.css'],
            'js' => ['top-js' => '/js/top.js']
        ],
        'guest' => [
            'css' => ['guest-style' => '/css/guest.css'],
            'js' => ['common-js' => '/js/common.js']
        ],
        'asayoko-features' => [
            'css' => ['asayoko-features-style' => '/css/asayoko-features.css'],
            'js' => ['common-js' => '/js/common.js']
        ],
        'member' => [
            'css' => ['member-style' => '/css/member.css'],
            'js' => ['common-js' => '/js/common.js']
        ],
        'contact' => [
            'css' => ['contact-style' => '/css/contact.css'],
            'js' => ['contact-js' => '/js/contact.js']
        ]
    ];

    // 条件分岐で必要なCSSとJSを読み込む
    $assets = [];
    if (is_front_page() || is_home()) {
        $assets = $page_assets['front'];
    } elseif (is_page('guest')) {
        $assets = $page_assets['guest'];
    } elseif (is_page('asayoko-features')) {
        $assets = $page_assets['asayoko-features'];
    } elseif (is_page('member')) {
        $assets = $page_assets['member'];
    } elseif (is_page('contact')) {
        $assets = $page_assets['contact'];
    }

    if (!empty($assets['css'])) {
        foreach ($assets['css'] as $handle => $path) {
            wp_enqueue_style($handle, get_template_directory_uri() . $path);
        }
    }

    if (!empty($assets['js'])) {
        foreach ($assets['js'] as $handle => $path) {
            wp_enqueue_script($handle, get_template_directory_uri() . $path, ['jquery'], null, true);
        }
    }
}
add_action('wp_enqueue_scripts', 'enqueue_asayoko_scripts');