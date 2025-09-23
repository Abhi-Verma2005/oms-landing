<?php
/**
 * Plugin Name: Force HTTP for Local Development
 * Description: Forces WordPress to use HTTP instead of HTTPS for local development
 * Version: 1.0
 * Author: Local Development
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Force HTTP for local development
add_action('init', function() {
    // Override any HTTPS detection
    $_SERVER['HTTPS'] = 'off';
    $_SERVER['SERVER_PORT'] = '8080';
    
    // Override forwarded headers
    if (isset($_SERVER['HTTP_X_FORWARDED_PROTO'])) {
        $_SERVER['HTTP_X_FORWARDED_PROTO'] = 'http';
    }
    if (isset($_SERVER['HTTP_X_FORWARDED_SSL'])) {
        $_SERVER['HTTP_X_FORWARDED_SSL'] = 'off';
    }
    if (isset($_SERVER['HTTP_X_FORWARDED_PORT'])) {
        $_SERVER['HTTP_X_FORWARDED_PORT'] = '8080';
    }
});

// Disable SSL enforcement
add_filter('force_ssl_admin', '__return_false');
add_filter('force_ssl', '__return_false');

// Override WordPress URL functions
add_filter('option_home', function($value) {
    return 'http://localhost:8080';
});

add_filter('option_siteurl', function($value) {
    return 'http://localhost:8080';
});

// Prevent HTTPS redirects
add_action('wp_redirect', function($location, $status) {
    if (strpos($location, 'https://') === 0) {
        $location = str_replace('https://', 'http://', $location);
    }
    return $location;
}, 10, 2);

// Override admin URL generation
add_filter('admin_url', function($url, $path, $blog_id) {
    if (strpos($url, 'https://') === 0) {
        $url = str_replace('https://', 'http://', $url);
    }
    return $url;
}, 10, 3);

// Override home URL generation
add_filter('home_url', function($url, $path, $scheme, $blog_id) {
    if (strpos($url, 'https://') === 0) {
        $url = str_replace('https://', 'http://', $url);
    }
    return $url;
}, 10, 4);

// Override site URL generation
add_filter('site_url', function($url, $path, $scheme, $blog_id) {
    if (strpos($url, 'https://') === 0) {
        $url = str_replace('https://', 'http://', $url);
    }
    return $url;
}, 10, 4);
