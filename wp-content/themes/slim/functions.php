<?php
// Theme setup
function theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_setup');
// Cleanup header
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_filter('the_generator', '__return_empty_string');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rest_output_link_wp_head');
show_admin_bar(false);
// Enqueue scripts
function theme_scripts()
{
    wp_deregister_script('wp-embed');
//    wp_deregister_script('jquery');
//    wp_deregister_script('jquery-migrate');

    wp_enqueue_script('app', get_theme_file_uri('dist/app.js'), null, '', true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');
// Enqueue styles
function theme_styles()
{
    wp_enqueue_style('theme-app', get_theme_file_uri('dist/app.css'), null, null);
}

add_action('wp_enqueue_scripts', 'theme_styles');

// Debug
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

//Function phone link for tel link
function phone_link($phone)
{
    return str_replace([' ', '(', ')', '-'], '', $phone);
}

//Function generateRandomString for input id
function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        ceil($length / strlen($x)))), 1, $length);
}

function url()
{
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
}

// Video attr
function get_video_id($url)
{
    if (!$url) {
        return null;
    }

    preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/",
        $url, $matches);
    return $matches[1];
}

function getVideoImageLinkAttribute($url)
{
    return 'https://img.youtube.com/vi/' . get_video_id($url) . '/maxresdefault.jpg';
}

function getVideoLinkAttribute($url)
{
    return 'https://www.youtube.com/embed/' . get_video_id($url);
}

function theme_customize_register($wp_customize)
{
    $wp_customize->add_section('contacts', [
        'title' => 'Контактная информация',
        'priority' => 30,
    ]);
    $wp_customize->add_setting('facebook');
    $wp_customize->add_control('facebook', [
        'section' => 'contacts',
        'label' => 'Facebook',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('instagram');
    $wp_customize->add_control('instagram', [
        'section' => 'contacts',
        'label' => 'Instagram',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('youtube');
    $wp_customize->add_control('youtube', [
        'section' => 'contacts',
        'label' => 'Youtube',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('telegram');
    $wp_customize->add_control('telegram', [
        'section' => 'contacts',
        'label' => 'Telegram',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('phone1');
    $wp_customize->add_control('phone1', [
        'section' => 'contacts',
        'label' => 'Первый телефон',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('phone2');
    $wp_customize->add_control('phone2', [
        'section' => 'contacts',
        'label' => 'Второй телефон',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('address');
    $wp_customize->add_control('address', [
        'section' => 'contacts',
        'label' => 'Адресс',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('address_link');
    $wp_customize->add_control('address_link', [
        'section' => 'contacts',
        'label' => 'Адресс на карте(ссылка)',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('email');
    $wp_customize->add_control('email', [
        'section' => 'contacts',
        'label' => 'Email',
        'type' => 'text',
    ]);

    $wp_customize->add_section('trainer_data', [
        'title' => 'Данные тренера',
        'priority' => 40,
    ]);
    $wp_customize->add_setting('full_name');
    $wp_customize->add_control('full_name', [
        'section' => 'trainer_data',
        'label' => 'ФИО',
        'type' => 'text',
    ]);
    $wp_customize->add_section('blog_page', [
        'title' => 'Страница "Блог"',
        'priority' => 50,
    ]);
    $wp_customize->add_setting('blog_page_title');
    $wp_customize->add_control('blog_page_title', [
        'section' => 'blog_page',
        'label' => 'Заголовок',
        'type' => 'text',
    ]);
    $wp_customize->add_setting('blog_page_description');
    $wp_customize->add_control('blog_page_description', [
        'section' => 'blog_page',
        'label' => 'Краткое описание',
        'type' => 'textarea',
    ]);
}

add_action('customize_register', 'theme_customize_register');

// Add class next and previous post link
add_filter('next_post_link', 'post_link_attributes_next');

function post_link_attributes_next($output)
{
    $code = 'class="page-link-nav page-link-nav--back"';
    return str_replace('<a href=', '<a ' . $code . ' href=', $output);
}

add_filter('previous_post_link', 'post_link_attributes_prev');
function post_link_attributes_prev($output)
{
    $code = 'class="page-link-nav page-link-nav--next"';
    return str_replace('<a href=', '<a ' . $code . ' href=', $output);
}