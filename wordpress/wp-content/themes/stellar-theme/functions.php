<?php
/**
 * Stellar Theme Functions
 * 
 * @package Stellar
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define theme constants
define('STELLAR_THEME_VERSION', '1.0.0');
define('STELLAR_THEME_PATH', get_template_directory());
define('STELLAR_THEME_URL', get_template_directory_uri());

/**
 * Theme setup
 */
function stellar_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    add_theme_support('custom-logo');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'stellar'),
        'footer' => __('Footer Menu', 'stellar'),
        'mobile' => __('Mobile Menu', 'stellar')
    ));
    
    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'stellar_setup');

/**
 * Enqueue scripts and styles
 */
function stellar_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('stellar-style', STELLAR_THEME_URL . '/assets/css/style.css', array(), STELLAR_THEME_VERSION);
    
    // Enqueue vendor CSS
    wp_enqueue_style('stellar-aos', STELLAR_THEME_URL . '/assets/css/vendors/aos.css', array(), STELLAR_THEME_VERSION);
    wp_enqueue_style('stellar-swiper', STELLAR_THEME_URL . '/assets/css/vendors/swiper-bundle.min.css', array(), STELLAR_THEME_VERSION);
    
    // Enqueue additional styles
    wp_enqueue_style('stellar-theme', STELLAR_THEME_URL . '/assets/css/additional-styles/theme.css', array(), STELLAR_THEME_VERSION);
    wp_enqueue_style('stellar-utility', STELLAR_THEME_URL . '/assets/css/additional-styles/utility-patterns.css', array(), STELLAR_THEME_VERSION);
    
    // Enqueue JavaScript
    wp_enqueue_script('stellar-alpine', STELLAR_THEME_URL . '/assets/js/vendors/alpinejs.min.js', array(), STELLAR_THEME_VERSION, true);
    wp_enqueue_script('stellar-aos', STELLAR_THEME_URL . '/assets/js/vendors/aos.js', array(), STELLAR_THEME_VERSION, true);
    wp_enqueue_script('stellar-swiper', STELLAR_THEME_URL . '/assets/js/vendors/swiper-bundle.min.js', array(), STELLAR_THEME_VERSION, true);
    wp_enqueue_script('stellar-main', STELLAR_THEME_URL . '/assets/js/main.js', array('jquery'), STELLAR_THEME_VERSION, true);
    
    // Comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'stellar_scripts');

/**
 * Register widget areas
 */
function stellar_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'stellar'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here.', 'stellar'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'stellar'),
        'id' => 'footer-1',
        'description' => __('Add footer widgets here.', 'stellar'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));
}
add_action('widgets_init', 'stellar_widgets_init');

/**
 * Fallback menu for primary navigation
 */
function stellar_fallback_menu() {
    echo '<ul class="flex grow justify-center flex-wrap items-center">';
    echo '<li><a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="' . esc_url(home_url('/about')) . '">' . esc_html__('About', 'stellar') . '</a></li>';
    echo '<li><a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="' . esc_url(home_url('/features')) . '">' . esc_html__('Features', 'stellar') . '</a></li>';
    echo '<li><a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="' . esc_url(home_url('/pricing')) . '">' . esc_html__('Pricing', 'stellar') . '</a></li>';
    echo '<li><a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="' . esc_url(home_url('/blog')) . '">' . esc_html__('Blog', 'stellar') . '</a></li>';
    echo '<li><a class="font-medium text-sm text-slate-300 hover:text-white mx-4 lg:mx-5 transition duration-150 ease-in-out" href="' . esc_url(home_url('/contact')) . '">' . esc_html__('Contact', 'stellar') . '</a></li>';
    echo '</ul>';
}
