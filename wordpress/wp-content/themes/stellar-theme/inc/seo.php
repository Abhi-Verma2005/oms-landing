<?php
/**
 * SEO Optimization Functions
 * 
 * @package Stellar
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add meta tags for SEO
 */
function stellar_seo_meta_tags() {
    if (is_front_page()) {
        $title = get_bloginfo('name') . ' - ' . get_bloginfo('description');
        $description = get_theme_mod('hero_subtitle', get_bloginfo('description'));
        $keywords = 'API, Security, Framework, Technology, SaaS';
    } elseif (is_single() || is_page()) {
        $title = get_the_title() . ' - ' . get_bloginfo('name');
        $description = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 20);
        $keywords = '';
        
        // Get post tags as keywords
        $tags = get_the_tags();
        if ($tags) {
            $tag_names = array();
            foreach ($tags as $tag) {
                $tag_names[] = $tag->name;
            }
            $keywords = implode(', ', $tag_names);
        }
    } elseif (is_category()) {
        $title = single_cat_title('', false) . ' - ' . get_bloginfo('name');
        $description = category_description() ? category_description() : 'Browse posts in ' . single_cat_title('', false);
        $keywords = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false) . ' - ' . get_bloginfo('name');
        $description = tag_description() ? tag_description() : 'Browse posts tagged with ' . single_tag_title('', false);
        $keywords = single_tag_title('', false);
    } else {
        $title = get_bloginfo('name') . ' - ' . get_bloginfo('description');
        $description = get_bloginfo('description');
        $keywords = '';
    }
    
    // Clean up description
    $description = wp_strip_all_tags($description);
    $description = str_replace(array("\r", "\n", "\t"), '', $description);
    $description = wp_trim_words($description, 25);
    
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    if (!empty($keywords)) {
        echo '<meta name="keywords" content="' . esc_attr($keywords) . '">' . "\n";
    }
    
    // Open Graph tags
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:type" content="' . (is_single() ? 'article' : 'website') . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    
    // Twitter Card tags
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
    
    // Add featured image for social sharing
    if (has_post_thumbnail()) {
        $image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
        echo '<meta property="og:image" content="' . esc_url($image_url) . '">' . "\n";
        echo '<meta name="twitter:image" content="' . esc_url($image_url) . '">' . "\n";
    }
}
add_action('wp_head', 'stellar_seo_meta_tags', 1);

/**
 * Add structured data (JSON-LD)
 */
function stellar_structured_data() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => get_bloginfo('name'),
            'description' => get_bloginfo('description'),
            'url' => home_url('/'),
            'logo' => get_template_directory_uri() . '/assets/images/logo.svg',
            'contactPoint' => array(
                '@type' => 'ContactPoint',
                'telephone' => get_theme_mod('contact_phone', ''),
                'contactType' => 'customer service',
                'email' => get_theme_mod('contact_email', ''),
            ),
            'sameAs' => array(
                get_theme_mod('social_twitter', ''),
                get_theme_mod('social_facebook', ''),
                get_theme_mod('social_linkedin', ''),
                get_theme_mod('social_github', ''),
            ),
        );
        
        // Remove empty values
        $schema['sameAs'] = array_filter($schema['sameAs']);
        if (empty($schema['contactPoint']['telephone'])) {
            unset($schema['contactPoint']['telephone']);
        }
        if (empty($schema['contactPoint']['email'])) {
            unset($schema['contactPoint']['email']);
        }
        
        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>' . "\n";
    }
    
    if (is_single()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => get_the_title(),
            'description' => wp_trim_words(get_the_excerpt(), 20),
            'datePublished' => get_the_date('c'),
            'dateModified' => get_the_modified_date('c'),
            'author' => array(
                '@type' => 'Person',
                'name' => get_the_author(),
                'url' => get_author_posts_url(get_the_author_meta('ID')),
            ),
            'publisher' => array(
                '@type' => 'Organization',
                'name' => get_bloginfo('name'),
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => get_template_directory_uri() . '/assets/images/logo.svg',
                ),
            ),
        );
        
        if (has_post_thumbnail()) {
            $schema['image'] = array(
                '@type' => 'ImageObject',
                'url' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
                'width' => 1200,
                'height' => 630,
            );
        }
        
        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>' . "\n";
    }
    
    if (is_page() && is_page_template('page-about.php')) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'AboutPage',
            'name' => get_the_title(),
            'description' => wp_trim_words(get_the_content(), 20),
            'url' => get_permalink(),
        );
        
        echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>' . "\n";
    }
}
add_action('wp_head', 'stellar_structured_data', 2);

/**
 * Optimize title tag
 */
function stellar_optimize_title($title) {
    if (is_front_page()) {
        return get_bloginfo('name') . ' - ' . get_bloginfo('description');
    }
    
    if (is_single() || is_page()) {
        return get_the_title() . ' - ' . get_bloginfo('name');
    }
    
    if (is_category()) {
        return single_cat_title('', false) . ' - ' . get_bloginfo('name');
    }
    
    if (is_tag()) {
        return single_tag_title('', false) . ' - ' . get_bloginfo('name');
    }
    
    if (is_author()) {
        return get_the_author() . ' - ' . get_bloginfo('name');
    }
    
    if (is_archive()) {
        return get_the_archive_title() . ' - ' . get_bloginfo('name');
    }
    
    return $title;
}
add_filter('wp_title', 'stellar_optimize_title');

/**
 * Add canonical URL
 */
function stellar_canonical_url() {
    if (is_singular()) {
        echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '">' . "\n";
    } elseif (is_home() && is_front_page()) {
        echo '<link rel="canonical" href="' . esc_url(home_url('/')) . '">' . "\n";
    }
}
add_action('wp_head', 'stellar_canonical_url');

/**
 * Add robots meta tag
 */
function stellar_robots_meta() {
    if (is_search() || is_404()) {
        echo '<meta name="robots" content="noindex, nofollow">' . "\n";
    } elseif (is_archive() && !is_category() && !is_tag()) {
        echo '<meta name="robots" content="noindex, follow">' . "\n";
    }
}
add_action('wp_head', 'stellar_robots_meta');

/**
 * Optimize images for SEO
 */
function stellar_optimize_images($content) {
    // Add loading="lazy" to images
    $content = preg_replace('/<img(.*?)>/i', '<img$1 loading="lazy">', $content);
    
    // Add alt text if missing
    $content = preg_replace('/<img((?!.*alt=).*?)>/i', '<img alt="' . get_the_title() . '"$1>', $content);
    
    return $content;
}
add_filter('the_content', 'stellar_optimize_images');

/**
 * Add breadcrumb structured data
 */
function stellar_breadcrumb_schema() {
    if (is_single() || is_page()) {
        $breadcrumbs = array(
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array(
                array(
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => home_url('/'),
                ),
            ),
        );
        
        if (is_single()) {
            $breadcrumbs['itemListElement'][] = array(
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Blog',
                'item' => get_permalink(get_option('page_for_posts')),
            );
            
            $breadcrumbs['itemListElement'][] = array(
                '@type' => 'ListItem',
                'position' => 3,
                'name' => get_the_title(),
                'item' => get_permalink(),
            );
        } else {
            $breadcrumbs['itemListElement'][] = array(
                '@type' => 'ListItem',
                'position' => 2,
                'name' => get_the_title(),
                'item' => get_permalink(),
            );
        }
        
        echo '<script type="application/ld+json">' . wp_json_encode($breadcrumbs) . '</script>' . "\n";
    }
}
add_action('wp_head', 'stellar_breadcrumb_schema', 3);

/**
 * Optimize page speed
 */
function stellar_page_speed_optimizations() {
    // Preload critical resources
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/assets/css/style.css" as="style">' . "\n";
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/assets/js/main.js" as="script">' . "\n";
    
    // DNS prefetch for external resources
    echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">' . "\n";
    echo '<link rel="dns-prefetch" href="//www.google-analytics.com">' . "\n";
    
    // Preconnect to important origins
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action('wp_head', 'stellar_page_speed_optimizations', 1);

/**
 * Add meta viewport for mobile optimization
 */
function stellar_mobile_optimization() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">' . "\n";
}
add_action('wp_head', 'stellar_mobile_optimization', 1);

/**
 * Optimize for Core Web Vitals
 */
function stellar_core_web_vitals() {
    // Add resource hints
    echo '<link rel="preconnect" href="' . home_url('/') . '">' . "\n";
    
    // Optimize font loading
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">' . "\n";
    echo '<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap"></noscript>' . "\n";
}
add_action('wp_head', 'stellar_core_web_vitals', 1);

/**
 * Generate XML sitemap
 */
function stellar_generate_sitemap() {
    if (isset($_GET['sitemap']) && $_GET['sitemap'] === 'stellar') {
        header('Content-Type: application/xml; charset=UTF-8');
        
        echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        
        // Homepage
        echo '<url>' . "\n";
        echo '<loc>' . esc_url(home_url('/')) . '</loc>' . "\n";
        echo '<lastmod>' . date('c') . '</lastmod>' . "\n";
        echo '<changefreq>daily</changefreq>' . "\n";
        echo '<priority>1.0</priority>' . "\n";
        echo '</url>' . "\n";
        
        // Posts
        $posts = get_posts(array('numberposts' => -1, 'post_status' => 'publish'));
        foreach ($posts as $post) {
            echo '<url>' . "\n";
            echo '<loc>' . esc_url(get_permalink($post->ID)) . '</loc>' . "\n";
            echo '<lastmod>' . get_the_modified_date('c', $post->ID) . '</lastmod>' . "\n";
            echo '<changefreq>weekly</changefreq>' . "\n";
            echo '<priority>0.8</priority>' . "\n";
            echo '</url>' . "\n";
        }
        
        // Pages
        $pages = get_pages();
        foreach ($pages as $page) {
            echo '<url>' . "\n";
            echo '<loc>' . esc_url(get_permalink($page->ID)) . '</loc>' . "\n";
            echo '<lastmod>' . get_the_modified_date('c', $page->ID) . '</lastmod>' . "\n";
            echo '<changefreq>monthly</changefreq>' . "\n";
            echo '<priority>0.6</priority>' . "\n";
            echo '</url>' . "\n";
        }
        
        echo '</urlset>' . "\n";
        exit;
    }
}
add_action('init', 'stellar_generate_sitemap');

/**
 * Add sitemap link to robots.txt
 */
function stellar_robots_txt($output) {
    $output .= "Sitemap: " . home_url('/?sitemap=stellar') . "\n";
    return $output;
}
add_filter('robots_txt', 'stellar_robots_txt');
