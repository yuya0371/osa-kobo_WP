<?php
function osakobo_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array('search-form') );
    add_image_size( 'page_eyechatch', 1000, 610, true );
    // add_image_size( 'archive_thumbnail');
    add_image_size( 'archive_thumbnail', 426, 240, true );
    register_nav_menu( 'main-menu', 'メインメニュー' );
}
add_action( 'after_setup_theme', 'osakobo_theme_setup');


function osakobo_enqueue_scripts(){
    wp_enqueue_script( 'jQuery' );
    wp_enqueue_script( 
        'osakobo-theme-common',
        get_template_directory_uri(  ).'/assets/js/theme-common.js',
        array(),
        '1.0.0',
        true
    );
    wp_enqueue_style( 
        'googlefonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap',
        array(),
        '1.0.0'
    );
    wp_enqueue_style( 
        'osakobo-theme-styles',
        get_template_directory_uri(  ).'/assets/css/theme-styles.css',
        array(),
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'osakobo_enqueue_scripts' );

// function osakobo_widgets_init(){

//     register_sidebar( 
//         array(
//             'name'=>'サイドバー',
//             'id'=>'sidebar-widget-area',
//             'description'=>'投稿、固定ページのサイドバー',
//             'before_widget'=>'<div id="%1$s" class="%2$s">',
//             'after_widget'=>'<?div>',
//         )
//     );

//     register_sidebars( 3, 
//     array(
//         'name'=>'フッター%s',
//         'id'=>'footer-widget-area',
//         'description'=>'フッターのサイドバー',
//         'before_widget'=>'<div id="%1$s" class="%2$s">',
//         'after_widget'=>'</div>',
//     )
//     );
// }
// add_action( 'widgets_init','osakobo_widgets_init' );

function osakobo_brock_setup(){
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name'  => 'スカイブルー',
                'slug'  => 'skyblue',
                'color' => '#00A1C6',
            ),
            array(
                'name'  => 'ライトスカイブルー',
                'slug'  => 'light-skyblue',
                'color' => '#ECF5F7',
            ),
            array(
                'name'  => 'ライトグレー',
                'slug'  => 'light-gray',
                'color' => '#F7F6F5',
            ),
            array(
                'name'  => 'グレー',
                'slug'  => 'gray',
                'color' => '#767268',
            ),
            array(
                'name'  => 'ダークグレー',
                'slug'  => 'dark-gray',
                'color' => '#43413B',
            ),
        )
    );
    // フォントサイズの設定.
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name' => '極小',
                'size' => 14,
                'slug' => 'x-small',
            ),
            array(
                'name' => '小',
                'size' => 16,
                'slug' => 'small',
            ),
            array(
                'name' => '標準',
                'size' => 18,
                'slug' => 'normal',
            ),
            array(
                'name' => '大',
                'size' => 24,
                'slug' => 'large',
            ),
            array(
                'name' => '特大',
                'size' => 36,
                'slug' => 'huge',
            ),
        )
    );
}
add_action( 'after_setup_theme','osakobo_brock_setup' );