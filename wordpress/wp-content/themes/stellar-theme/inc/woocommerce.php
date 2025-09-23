<?php
/**
 * WooCommerce Integration
 * 
 * @package Stellar
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Check if WooCommerce is active
if (!class_exists('WooCommerce')) {
    return;
}

/**
 * Remove WooCommerce default styles
 */
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

/**
 * Add theme support for WooCommerce
 */
function stellar_woocommerce_support() {
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'stellar_woocommerce_support');

/**
 * Enqueue WooCommerce styles
 */
function stellar_woocommerce_styles() {
    wp_enqueue_style('stellar-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', array('stellar-style'), STELLAR_THEME_VERSION);
}
add_action('wp_enqueue_scripts', 'stellar_woocommerce_styles');

/**
 * Change number of products per row
 */
function stellar_woocommerce_loop_columns() {
    return 3;
}
add_filter('loop_shop_columns', 'stellar_woocommerce_loop_columns');

/**
 * Change number of products per page
 */
function stellar_woocommerce_products_per_page() {
    return 12;
}
add_filter('loop_shop_per_page', 'stellar_woocommerce_products_per_page');

/**
 * Remove WooCommerce breadcrumbs
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

/**
 * Remove WooCommerce sidebar
 */
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

/**
 * Customize WooCommerce wrapper
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function stellar_woocommerce_wrapper_start() {
    echo '<div class="woocommerce-wrapper max-w-6xl mx-auto px-4 sm:px-6 py-8">';
}
add_action('woocommerce_before_main_content', 'stellar_woocommerce_wrapper_start', 10);

function stellar_woocommerce_wrapper_end() {
    echo '</div>';
}
add_action('woocommerce_after_main_content', 'stellar_woocommerce_wrapper_end', 10);

/**
 * Customize product loop
 */
function stellar_woocommerce_template_loop_product_link_open() {
    echo '<a href="' . get_the_permalink() . '" class="block group">';
}
add_action('woocommerce_before_shop_loop_item', 'stellar_woocommerce_template_loop_product_link_open', 10);

function stellar_woocommerce_template_loop_product_link_close() {
    echo '</a>';
}
add_action('woocommerce_after_shop_loop_item', 'stellar_woocommerce_template_loop_product_link_close', 5);

/**
 * Customize product thumbnail
 */
function stellar_woocommerce_product_thumbnail() {
    echo '<div class="relative overflow-hidden rounded-lg mb-4">';
    echo woocommerce_get_product_thumbnail('woocommerce_thumbnail');
    echo '<div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>';
    echo '</div>';
}
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'stellar_woocommerce_product_thumbnail', 10);

/**
 * Customize product title
 */
function stellar_woocommerce_shop_loop_item_title() {
    echo '<h3 class="text-lg font-semibold text-slate-100 mb-2 group-hover:text-purple-400 transition-colors">';
    echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
    echo '</h3>';
}
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'stellar_woocommerce_shop_loop_item_title', 10);

/**
 * Customize product price
 */
function stellar_woocommerce_template_loop_price() {
    echo '<div class="text-purple-500 font-semibold">';
    woocommerce_template_loop_price();
    echo '</div>';
}
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
add_action('woocommerce_after_shop_loop_item_title', 'stellar_woocommerce_template_loop_price', 10);

/**
 * Customize add to cart button
 */
function stellar_woocommerce_template_loop_add_to_cart() {
    global $product;
    
    echo '<div class="mt-4">';
    echo '<a href="' . esc_url($product->add_to_cart_url()) . '" class="btn-sm w-full text-center bg-purple-600 hover:bg-purple-700 text-white transition-colors">';
    echo $product->add_to_cart_text();
    echo '</a>';
    echo '</div>';
}
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
add_action('woocommerce_after_shop_loop_item', 'stellar_woocommerce_template_loop_add_to_cart', 10);

/**
 * Customize single product page
 */
function stellar_woocommerce_single_product_summary() {
    echo '<div class="max-w-4xl mx-auto">';
    echo '<div class="grid md:grid-cols-2 gap-8">';
    echo '<div>';
    woocommerce_show_product_images();
    echo '</div>';
    echo '<div>';
    woocommerce_template_single_title();
    woocommerce_template_single_rating();
    woocommerce_template_single_price();
    woocommerce_template_single_excerpt();
    woocommerce_template_single_add_to_cart();
    woocommerce_template_single_meta();
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

add_action('woocommerce_single_product_summary', 'stellar_woocommerce_single_product_summary', 5);

/**
 * Customize cart page
 */
function stellar_woocommerce_before_cart_table() {
    echo '<div class="max-w-4xl mx-auto">';
}
add_action('woocommerce_before_cart_table', 'stellar_woocommerce_before_cart_table');

function stellar_woocommerce_after_cart_table() {
    echo '</div>';
}
add_action('woocommerce_after_cart_table', 'stellar_woocommerce_after_cart_table');

/**
 * Customize checkout page
 */
function stellar_woocommerce_before_checkout_form() {
    echo '<div class="max-w-4xl mx-auto">';
}
add_action('woocommerce_before_checkout_form', 'stellar_woocommerce_before_checkout_form');

function stellar_woocommerce_after_checkout_form() {
    echo '</div>';
}
add_action('woocommerce_after_checkout_form', 'stellar_woocommerce_after_checkout_form');

/**
 * Customize my account page
 */
function stellar_woocommerce_before_my_account() {
    echo '<div class="max-w-4xl mx-auto">';
}
add_action('woocommerce_before_my_account', 'stellar_woocommerce_before_my_account');

function stellar_woocommerce_after_my_account() {
    echo '</div>';
}
add_action('woocommerce_after_my_account', 'stellar_woocommerce_after_my_account');

/**
 * Remove WooCommerce default notices styling
 */
function stellar_woocommerce_notice_wrapper_start() {
    echo '<div class="woocommerce-notices-wrapper max-w-6xl mx-auto px-4 sm:px-6">';
}
add_action('woocommerce_before_shop_loop', 'stellar_woocommerce_notice_wrapper_start', 5);
add_action('woocommerce_before_single_product', 'stellar_woocommerce_notice_wrapper_start', 5);

function stellar_woocommerce_notice_wrapper_end() {
    echo '</div>';
}
add_action('woocommerce_after_shop_loop', 'stellar_woocommerce_notice_wrapper_end', 25);
add_action('woocommerce_after_single_product', 'stellar_woocommerce_notice_wrapper_end', 5);

/**
 * Customize WooCommerce pagination
 */
function stellar_woocommerce_pagination_args($args) {
    $args['prev_text'] = __('Previous', 'stellar');
    $args['next_text'] = __('Next', 'stellar');
    return $args;
}
add_filter('woocommerce_pagination_args', 'stellar_woocommerce_pagination_args');

/**
 * Add custom WooCommerce CSS
 */
function stellar_woocommerce_custom_css() {
    ?>
    <style type="text/css">
        .woocommerce .woocommerce-breadcrumb {
            background: transparent;
            padding: 0;
            margin: 0 0 2rem 0;
        }
        
        .woocommerce .woocommerce-breadcrumb a {
            color: #94a3b8;
            text-decoration: none;
        }
        
        .woocommerce .woocommerce-breadcrumb a:hover {
            color: #a855f7;
        }
        
        .woocommerce .woocommerce-breadcrumb .breadcrumb-separator {
            color: #64748b;
            margin: 0 0.5rem;
        }
        
        .woocommerce .woocommerce-breadcrumb .breadcrumb-current {
            color: #e2e8f0;
        }
        
        .woocommerce .woocommerce-products-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .woocommerce .woocommerce-products-header h1 {
            color: #e2e8f0;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .woocommerce .woocommerce-products-header .woocommerce-result-count {
            color: #94a3b8;
            margin-bottom: 1rem;
        }
        
        .woocommerce .woocommerce-ordering select {
            background: #1e293b;
            border: 1px solid #334155;
            color: #e2e8f0;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
        }
        
        .woocommerce .woocommerce-ordering select:focus {
            outline: none;
            border-color: #a855f7;
            box-shadow: 0 0 0 3px rgba(168, 85, 247, 0.1);
        }
        
        .woocommerce .woocommerce-loop-product__title {
            color: #e2e8f0;
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .woocommerce .woocommerce-loop-product__title:hover {
            color: #a855f7;
        }
        
        .woocommerce .price {
            color: #a855f7;
            font-weight: 600;
        }
        
        .woocommerce .price del {
            color: #64748b;
        }
        
        .woocommerce .price ins {
            color: #a855f7;
            text-decoration: none;
        }
        
        .woocommerce .woocommerce-loop-product__link {
            display: block;
            text-decoration: none;
        }
        
        .woocommerce .woocommerce-loop-product__link:hover {
            text-decoration: none;
        }
        
        .woocommerce .product .woocommerce-loop-product__title {
            color: #e2e8f0;
        }
        
        .woocommerce .product .woocommerce-loop-product__title:hover {
            color: #a855f7;
        }
        
        .woocommerce .woocommerce-loop-product__thumbnail {
            border-radius: 0.5rem;
            overflow: hidden;
        }
        
        .woocommerce .woocommerce-loop-product__thumbnail img {
            transition: transform 0.3s ease;
        }
        
        .woocommerce .woocommerce-loop-product__thumbnail:hover img {
            transform: scale(1.05);
        }
        
        .woocommerce .woocommerce-pagination {
            margin-top: 3rem;
        }
        
        .woocommerce .woocommerce-pagination ul {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .woocommerce .woocommerce-pagination li {
            margin: 0 0.25rem;
        }
        
        .woocommerce .woocommerce-pagination a,
        .woocommerce .woocommerce-pagination span {
            display: block;
            padding: 0.5rem 1rem;
            background: #1e293b;
            border: 1px solid #334155;
            color: #94a3b8;
            text-decoration: none;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .woocommerce .woocommerce-pagination a:hover,
        .woocommerce .woocommerce-pagination .current {
            background: #a855f7;
            border-color: #a855f7;
            color: #ffffff;
        }
        
        .woocommerce .woocommerce-message,
        .woocommerce .woocommerce-info,
        .woocommerce .woocommerce-error {
            background: #1e293b;
            border: 1px solid #334155;
            color: #e2e8f0;
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1rem;
        }
        
        .woocommerce .woocommerce-message {
            border-left: 4px solid #10b981;
        }
        
        .woocommerce .woocommerce-info {
            border-left: 4px solid #3b82f6;
        }
        
        .woocommerce .woocommerce-error {
            border-left: 4px solid #ef4444;
        }
        
        .woocommerce .woocommerce-message::before,
        .woocommerce .woocommerce-info::before,
        .woocommerce .woocommerce-error::before {
            color: #e2e8f0;
        }
        
        .woocommerce .button,
        .woocommerce button.button,
        .woocommerce input.button {
            background: #a855f7;
            border: 1px solid #a855f7;
            color: #ffffff;
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .woocommerce .button:hover,
        .woocommerce button.button:hover,
        .woocommerce input.button:hover {
            background: #9333ea;
            border-color: #9333ea;
            color: #ffffff;
        }
        
        .woocommerce .button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt {
            background: #1e293b;
            border-color: #334155;
            color: #e2e8f0;
        }
        
        .woocommerce .button.alt:hover,
        .woocommerce button.button.alt:hover,
        .woocommerce input.button.alt:hover {
            background: #334155;
            border-color: #475569;
            color: #e2e8f0;
        }
        
        .woocommerce form .form-row input.input-text,
        .woocommerce form .form-row textarea,
        .woocommerce form .form-row select {
            background: #1e293b;
            border: 1px solid #334155;
            color: #e2e8f0;
            border-radius: 0.5rem;
            padding: 0.75rem;
        }
        
        .woocommerce form .form-row input.input-text:focus,
        .woocommerce form .form-row textarea:focus,
        .woocommerce form .form-row select:focus {
            outline: none;
            border-color: #a855f7;
            box-shadow: 0 0 0 3px rgba(168, 85, 247, 0.1);
        }
        
        .woocommerce form .form-row label {
            color: #e2e8f0;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        
        .woocommerce form .form-row .required {
            color: #ef4444;
        }
        
        .woocommerce .woocommerce-form-login,
        .woocommerce .woocommerce-form-register {
            background: #1e293b;
            border: 1px solid #334155;
            border-radius: 0.5rem;
            padding: 2rem;
        }
        
        .woocommerce .woocommerce-form-login h2,
        .woocommerce .woocommerce-form-register h2 {
            color: #e2e8f0;
            margin-bottom: 1.5rem;
        }
        
        .woocommerce .woocommerce-LostPassword a {
            color: #a855f7;
            text-decoration: none;
        }
        
        .woocommerce .woocommerce-LostPassword a:hover {
            color: #9333ea;
        }
    </style>
    <?php
}
add_action('wp_head', 'stellar_woocommerce_custom_css');
