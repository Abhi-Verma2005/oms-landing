<?php
/**
 * Theme Customizer
 * 
 * @package Stellar
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function stellar_customize_register($wp_customize) {
    
    // Add theme options panel
    $wp_customize->add_panel('stellar_theme_options', array(
        'title' => __('Theme Options', 'stellar'),
        'description' => __('Customize your theme settings', 'stellar'),
        'priority' => 30,
    ));
    
    // Hero Section
    $wp_customize->add_section('stellar_hero', array(
        'title' => __('Hero Section', 'stellar'),
        'panel' => 'stellar_theme_options',
        'priority' => 10,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default' => __('The API Security Framework', 'stellar'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'stellar'),
        'section' => 'stellar_hero',
        'type' => 'text',
        'description' => __('Main headline displayed on the homepage', 'stellar'),
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => __('Our landing page template works on all devices, so you only have to set it up once, and get beautiful results forever.', 'stellar'),
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'stellar'),
        'section' => 'stellar_hero',
        'type' => 'textarea',
        'description' => __('Subtitle text displayed below the main headline', 'stellar'),
    ));
    
    $wp_customize->add_setting('hero_button_text', array(
        'default' => __('Get Started', 'stellar'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control('hero_button_text', array(
        'label' => __('Hero Button Text', 'stellar'),
        'section' => 'stellar_hero',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_button_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control('hero_button_url', array(
        'label' => __('Hero Button URL', 'stellar'),
        'section' => 'stellar_hero',
        'type' => 'url',
    ));
    
    // Social Media Links
    $wp_customize->add_section('stellar_social', array(
        'title' => __('Social Media Links', 'stellar'),
        'panel' => 'stellar_theme_options',
        'priority' => 20,
    ));
    
    $social_platforms = array(
        'twitter' => __('Twitter URL', 'stellar'),
        'facebook' => __('Facebook URL', 'stellar'),
        'linkedin' => __('LinkedIn URL', 'stellar'),
        'github' => __('GitHub URL', 'stellar'),
        'instagram' => __('Instagram URL', 'stellar'),
    );
    
    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting('social_' . $platform, array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'postMessage',
        ));
        
        $wp_customize->add_control('social_' . $platform, array(
            'label' => $label,
            'section' => 'stellar_social',
            'type' => 'url',
        ));
    }
    
    // Footer Section
    $wp_customize->add_section('stellar_footer', array(
        'title' => __('Footer', 'stellar'),
        'panel' => 'stellar_theme_options',
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('footer_copyright', array(
        'default' => __('© Cruip.com - All rights reserved.', 'stellar'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control('footer_copyright', array(
        'label' => __('Copyright Text', 'stellar'),
        'section' => 'stellar_footer',
        'type' => 'text',
    ));
    
    // Contact Information
    $wp_customize->add_section('stellar_contact', array(
        'title' => __('Contact Information', 'stellar'),
        'panel' => 'stellar_theme_options',
        'priority' => 40,
    ));
    
    $wp_customize->add_setting('contact_email', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label' => __('Contact Email', 'stellar'),
        'section' => 'stellar_contact',
        'type' => 'email',
    ));
    
    $wp_customize->add_setting('contact_phone', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'label' => __('Contact Phone', 'stellar'),
        'section' => 'stellar_contact',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('contact_address', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control('contact_address', array(
        'label' => __('Contact Address', 'stellar'),
        'section' => 'stellar_contact',
        'type' => 'textarea',
    ));
    
    // Analytics & SEO
    $wp_customize->add_section('stellar_analytics', array(
        'title' => __('Analytics & SEO', 'stellar'),
        'panel' => 'stellar_theme_options',
        'priority' => 50,
    ));
    
    $wp_customize->add_setting('google_analytics_id', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('google_analytics_id', array(
        'label' => __('Google Analytics ID', 'stellar'),
        'section' => 'stellar_analytics',
        'type' => 'text',
        'description' => __('Enter your Google Analytics tracking ID (e.g., GA-XXXXXXXXX)', 'stellar'),
    ));
    
    $wp_customize->add_setting('google_tag_manager_id', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('google_tag_manager_id', array(
        'label' => __('Google Tag Manager ID', 'stellar'),
        'section' => 'stellar_analytics',
        'type' => 'text',
        'description' => __('Enter your Google Tag Manager container ID (e.g., GTM-XXXXXXX)', 'stellar'),
    ));
    
    // Performance Settings
    $wp_customize->add_section('stellar_performance', array(
        'title' => __('Performance', 'stellar'),
        'panel' => 'stellar_theme_options',
        'priority' => 60,
    ));
    
    $wp_customize->add_setting('lazy_load_images', array(
        'default' => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    
    $wp_customize->add_control('lazy_load_images', array(
        'label' => __('Enable Lazy Loading for Images', 'stellar'),
        'section' => 'stellar_performance',
        'type' => 'checkbox',
        'description' => __('Improve page load times by lazy loading images', 'stellar'),
    ));
    
    $wp_customize->add_setting('minify_css', array(
        'default' => false,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    
    $wp_customize->add_control('minify_css', array(
        'label' => __('Minify CSS', 'stellar'),
        'section' => 'stellar_performance',
        'type' => 'checkbox',
        'description' => __('Minify CSS files for better performance', 'stellar'),
    ));
    
    $wp_customize->add_setting('minify_js', array(
        'default' => false,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    
    $wp_customize->add_control('minify_js', array(
        'label' => __('Minify JavaScript', 'stellar'),
        'section' => 'stellar_performance',
        'type' => 'checkbox',
        'description' => __('Minify JavaScript files for better performance', 'stellar'),
    ));
    
    // Custom CSS
    $wp_customize->add_section('stellar_custom_css', array(
        'title' => __('Custom CSS', 'stellar'),
        'panel' => 'stellar_theme_options',
        'priority' => 70,
    ));
    
    $wp_customize->add_setting('custom_css', array(
        'default' => '',
        'sanitize_callback' => 'stellar_sanitize_css',
    ));
    
    $wp_customize->add_control('custom_css', array(
        'label' => __('Custom CSS', 'stellar'),
        'section' => 'stellar_custom_css',
        'type' => 'textarea',
        'description' => __('Add your custom CSS code here', 'stellar'),
    ));
    
    // Color Scheme
    $wp_customize->add_section('stellar_colors', array(
        'title' => __('Color Scheme', 'stellar'),
        'panel' => 'stellar_theme_options',
        'priority' => 80,
    ));
    
    $wp_customize->add_setting('primary_color', array(
        'default' => '#A855F7',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label' => __('Primary Color', 'stellar'),
        'section' => 'stellar_colors',
        'description' => __('Main brand color used throughout the theme', 'stellar'),
    )));
    
    $wp_customize->add_setting('secondary_color', array(
        'default' => '#6366F1',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label' => __('Secondary Color', 'stellar'),
        'section' => 'stellar_colors',
        'description' => __('Secondary brand color', 'stellar'),
    )));
    
    // Typography
    $wp_customize->add_section('stellar_typography', array(
        'title' => __('Typography', 'stellar'),
        'panel' => 'stellar_theme_options',
        'priority' => 90,
    ));
    
    $wp_customize->add_setting('heading_font', array(
        'default' => 'Inter',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control('heading_font', array(
        'label' => __('Heading Font', 'stellar'),
        'section' => 'stellar_typography',
        'type' => 'select',
        'choices' => array(
            'Inter' => 'Inter',
            'Roboto' => 'Roboto',
            'Open Sans' => 'Open Sans',
            'Lato' => 'Lato',
            'Montserrat' => 'Montserrat',
            'Source Sans Pro' => 'Source Sans Pro',
        ),
    ));
    
    $wp_customize->add_setting('body_font', array(
        'default' => 'Inter',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ));
    
    $wp_customize->add_control('body_font', array(
        'label' => __('Body Font', 'stellar'),
        'section' => 'stellar_typography',
        'type' => 'select',
        'choices' => array(
            'Inter' => 'Inter',
            'Roboto' => 'Roboto',
            'Open Sans' => 'Open Sans',
            'Lato' => 'Lato',
            'Montserrat' => 'Montserrat',
            'Source Sans Pro' => 'Source Sans Pro',
        ),
    ));
    
    // Selective refresh for live preview
    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('hero_title', array(
            'selector' => '.hero-title',
            'render_callback' => 'stellar_customize_partial_hero_title',
        ));
        
        $wp_customize->selective_refresh->add_partial('hero_subtitle', array(
            'selector' => '.hero-subtitle',
            'render_callback' => 'stellar_customize_partial_hero_subtitle',
        ));
        
        $wp_customize->selective_refresh->add_partial('footer_copyright', array(
            'selector' => '.footer-copyright',
            'render_callback' => 'stellar_customize_partial_footer_copyright',
        ));
    }
}

add_action('customize_register', 'stellar_customize_register');

/**
 * Sanitize CSS
 */
function stellar_sanitize_css($css) {
    return wp_strip_all_tags($css);
}

/**
 * Render the site title for the selective refresh partial.
 */
function stellar_customize_partial_hero_title() {
    return get_theme_mod('hero_title');
}

/**
 * Render the site tagline for the selective refresh partial.
 */
function stellar_customize_partial_hero_subtitle() {
    return get_theme_mod('hero_subtitle');
}

/**
 * Render the footer copyright for the selective refresh partial.
 */
function stellar_customize_partial_footer_copyright() {
    return get_theme_mod('footer_copyright');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function stellar_customize_preview_js() {
    wp_enqueue_script('stellar-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), STELLAR_THEME_VERSION, true);
}

add_action('customize_preview_init', 'stellar_customize_preview_js');

/**
 * Add custom CSS from customizer
 */
function stellar_custom_css() {
    $custom_css = get_theme_mod('custom_css', '');
    
    if (!empty($custom_css)) {
        echo '<style type="text/css" id="stellar-custom-css">';
        echo $custom_css;
        echo '</style>';
    }
    
    // Add dynamic colors
    $primary_color = get_theme_mod('primary_color', '#A855F7');
    $secondary_color = get_theme_mod('secondary_color', '#6366F1');
    
    if ($primary_color !== '#A855F7' || $secondary_color !== '#6366F1') {
        echo '<style type="text/css" id="stellar-dynamic-colors">';
        echo ':root {';
        echo '--color-primary: ' . $primary_color . ';';
        echo '--color-secondary: ' . $secondary_color . ';';
        echo '}';
        echo '</style>';
    }
}

add_action('wp_head', 'stellar_custom_css');

/**
 * Add Google Analytics tracking code
 */
function stellar_google_analytics() {
    $ga_id = get_theme_mod('google_analytics_id', '');
    
    if (!empty($ga_id)) {
        ?>
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr($ga_id); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo esc_attr($ga_id); ?>');
        </script>
        <?php
    }
}

add_action('wp_head', 'stellar_google_analytics');

/**
 * Add Google Tag Manager code
 */
function stellar_google_tag_manager_head() {
    $gtm_id = get_theme_mod('google_tag_manager_id', '');
    
    if (!empty($gtm_id)) {
        ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?php echo esc_attr($gtm_id); ?>');</script>
        <!-- End Google Tag Manager -->
        <?php
    }
}

add_action('wp_head', 'stellar_google_tag_manager_head');

/**
 * Add Google Tag Manager noscript code
 */
function stellar_google_tag_manager_body() {
    $gtm_id = get_theme_mod('google_tag_manager_id', '');
    
    if (!empty($gtm_id)) {
        ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo esc_attr($gtm_id); ?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <?php
    }
}

add_action('wp_body_open', 'stellar_google_tag_manager_body');
