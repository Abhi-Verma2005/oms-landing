<?php
/**
 * Helper Functions
 * 
 * @package Stellar
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

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

/**
 * Get post excerpt with custom length
 */
function stellar_get_excerpt($post_id = null, $length = 25) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $excerpt = get_post_field('post_excerpt', $post_id);
    
    if (empty($excerpt)) {
        $excerpt = get_post_field('post_content', $post_id);
        $excerpt = strip_shortcodes($excerpt);
        $excerpt = wp_strip_all_tags($excerpt);
        $excerpt = wp_trim_words($excerpt, $length, '...');
    }
    
    return $excerpt;
}

/**
 * Get featured image URL with fallback
 */
function stellar_get_featured_image_url($post_id = null, $size = 'full') {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $image_url = get_the_post_thumbnail_url($post_id, $size);
    
    if (!$image_url) {
        $image_url = get_template_directory_uri() . '/assets/images/placeholder.jpg';
    }
    
    return $image_url;
}

/**
 * Get team member position
 */
function stellar_get_team_position($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    return get_post_meta($post_id, '_team_member_position', true);
}

/**
 * Get testimonial author
 */
function stellar_get_testimonial_author($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    return get_post_meta($post_id, '_testimonial_author', true);
}

/**
 * Get testimonial author position
 */
function stellar_get_testimonial_author_position($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    return get_post_meta($post_id, '_testimonial_author_position', true);
}

/**
 * Get testimonial company
 */
function stellar_get_testimonial_company($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    return get_post_meta($post_id, '_testimonial_company', true);
}

/**
 * Format date for display
 */
function stellar_format_date($date, $format = 'M j, Y') {
    if (is_string($date)) {
        $date = strtotime($date);
    }
    
    return date($format, $date);
}

/**
 * Check if page is blog related
 */
function stellar_is_blog() {
    return (is_home() || is_category() || is_tag() || is_author() || is_date() || is_singular('post'));
}

/**
 * Get page template name
 */
function stellar_get_page_template() {
    global $template;
    return basename($template);
}

/**
 * Sanitize phone number
 */
function stellar_sanitize_phone($phone) {
    return preg_replace('/[^0-9+\-\(\)\s]/', '', $phone);
}

/**
 * Generate breadcrumbs
 */
function stellar_breadcrumbs() {
    if (is_front_page()) {
        return;
    }
    
    echo '<nav class="breadcrumbs" aria-label="' . esc_attr__('Breadcrumb', 'stellar') . '">';
    echo '<ol class="flex items-center space-x-2 text-sm text-slate-400">';
    
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="hover:text-white transition-colors">' . esc_html__('Home', 'stellar') . '</a></li>';
    
    if (is_category() || is_single()) {
        echo '<li><span class="mx-2">/</span></li>';
        echo '<li><a href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '" class="hover:text-white transition-colors">' . esc_html__('Blog', 'stellar') . '</a></li>';
    }
    
    if (is_category()) {
        echo '<li><span class="mx-2">/</span></li>';
        echo '<li>' . single_cat_title('', false) . '</li>';
    }
    
    if (is_single()) {
        echo '<li><span class="mx-2">/</span></li>';
        echo '<li>' . get_the_title() . '</li>';
    }
    
    if (is_page()) {
        echo '<li><span class="mx-2">/</span></li>';
        echo '<li>' . get_the_title() . '</li>';
    }
    
    echo '</ol>';
    echo '</nav>';
}

/**
 * Get social media links
 */
function stellar_get_social_links() {
    return array(
        'twitter' => get_theme_mod('social_twitter', ''),
        'facebook' => get_theme_mod('social_facebook', ''),
        'linkedin' => get_theme_mod('social_linkedin', ''),
        'github' => get_theme_mod('social_github', ''),
        'instagram' => get_theme_mod('social_instagram', ''),
    );
}

/**
 * Display social media links
 */
function stellar_display_social_links($class = '') {
    $social_links = stellar_get_social_links();
    $social_icons = array(
        'twitter' => '<svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>',
        'facebook' => '<svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>',
        'linkedin' => '<svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>',
        'github' => '<svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>',
        'instagram' => '<svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>',
    );
    
    echo '<ul class="flex space-x-4 ' . esc_attr($class) . '">';
    
    foreach ($social_links as $platform => $url) {
        if (!empty($url)) {
            echo '<li>';
            echo '<a href="' . esc_url($url) . '" class="flex justify-center items-center text-purple-500 hover:text-purple-400 transition duration-150 ease-in-out" aria-label="' . esc_attr(ucfirst($platform)) . '">';
            echo $social_icons[$platform];
            echo '</a>';
            echo '</li>';
        }
    }
    
    echo '</ul>';
}

/**
 * Get theme option with default value
 */
function stellar_get_option($option, $default = '') {
    return get_theme_mod($option, $default);
}

/**
 * Check if WooCommerce is active
 */
function stellar_is_woocommerce_active() {
    return class_exists('WooCommerce');
}

/**
 * Get WooCommerce shop page ID
 */
function stellar_get_shop_page_id() {
    if (stellar_is_woocommerce_active()) {
        return wc_get_page_id('shop');
    }
    return 0;
}

/**
 * Format currency
 */
function stellar_format_currency($amount, $currency = 'USD') {
    if (stellar_is_woocommerce_active()) {
        return wc_price($amount);
    }
    
    $symbols = array(
        'USD' => '$',
        'EUR' => '€',
        'GBP' => '£',
        'JPY' => '¥',
    );
    
    $symbol = isset($symbols[$currency]) ? $symbols[$currency] : '$';
    return $symbol . number_format($amount, 2);
}

/**
 * Get reading time for post
 */
function stellar_get_reading_time($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // Average reading speed: 200 words per minute
    
    return $reading_time;
}

/**
 * Display reading time
 */
function stellar_display_reading_time($post_id = null) {
    $reading_time = stellar_get_reading_time($post_id);
    echo '<span class="reading-time">' . sprintf(_n('%d min read', '%d mins read', $reading_time, 'stellar'), $reading_time) . '</span>';
}

/**
 * Get related posts
 */
function stellar_get_related_posts($post_id = null, $limit = 3) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $categories = wp_get_post_categories($post_id);
    
    if (empty($categories)) {
        return array();
    }
    
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => $limit,
        'post__not_in' => array($post_id),
        'category__in' => $categories,
        'orderby' => 'rand',
    );
    
    return new WP_Query($args);
}
