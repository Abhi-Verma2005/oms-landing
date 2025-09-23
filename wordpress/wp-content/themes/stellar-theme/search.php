<?php
/**
 * The template for displaying search results pages
 *
 * @package Stellar
 * @since 1.0.0
 */

get_header(); ?>

<div class="max-w-6xl mx-auto px-4 sm:px-6 py-8">

    <!-- Search Header -->
    <header class="search-header text-center mb-12">
        <h1 class="text-3xl md:text-4xl font-bold text-slate-100 mb-4">
            <?php
            printf(
                esc_html__('Search Results for: %s', 'stellar'),
                '<span class="text-purple-500">' . get_search_query() . '</span>'
            );
            ?>
        </h1>
        
        <div class="max-w-md mx-auto">
            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex">
                <label class="sr-only" for="search-field"><?php esc_html_e('Search for:', 'stellar'); ?></label>
                <input 
                    type="search" 
                    id="search-field"
                    class="flex-1 px-4 py-3 bg-slate-800 border border-slate-700 rounded-l-lg text-slate-100 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" 
                    placeholder="<?php esc_attr_e('Search...', 'stellar'); ?>" 
                    value="<?php echo get_search_query(); ?>" 
                    name="s" 
                />
                <button 
                    type="submit" 
                    class="px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-r-lg transition-colors focus:outline-none focus:ring-2 focus:ring-purple-500"
                >
                    <?php esc_html_e('Search', 'stellar'); ?>
                </button>
            </form>
        </div>
    </header>

    <!-- Search Results -->
    <?php if (have_posts()) : ?>
        
        <div class="mb-6">
            <p class="text-slate-400">
                <?php
                global $wp_query;
                printf(
                    esc_html(_n('%d result found', '%d results found', $wp_query->found_posts, 'stellar')),
                    $wp_query->found_posts
                );
                ?>
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('bg-slate-800 rounded-lg border border-slate-700 overflow-hidden hover:border-purple-500 transition-all duration-300 group'); ?>>
                    
                    <!-- Featured Image -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="aspect-video overflow-hidden">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    
                    <div class="p-6">
                        
                        <!-- Post Meta -->
                        <div class="flex items-center space-x-4 text-sm text-slate-400 mb-4">
                            <span class="post-type bg-purple-600 text-white px-2 py-1 rounded text-xs">
                                <?php echo get_post_type_object(get_post_type())->labels->singular_name; ?>
                            </span>
                            
                            <time class="published" datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                        </div>
                        
                        <!-- Post Title -->
                        <h2 class="entry-title text-xl font-bold text-slate-100 mb-3 line-clamp-2">
                            <a href="<?php the_permalink(); ?>" class="hover:text-purple-400 transition-colors">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        
                        <!-- Post Excerpt -->
                        <div class="entry-excerpt text-slate-400 mb-4 line-clamp-3">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <!-- Read More -->
                        <a href="<?php the_permalink(); ?>" class="text-purple-500 hover:text-purple-400 transition-colors font-medium">
                            <?php esc_html_e('Read more', 'stellar'); ?> →
                        </a>
                        
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <nav class="pagination-wrapper">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('Previous', 'stellar'),
                'next_text' => __('Next', 'stellar'),
                'class' => 'stellar-pagination',
            ));
            ?>
        </nav>

    <?php else : ?>
        
        <!-- No Results Found -->
        <div class="text-center py-12">
            <div class="max-w-md mx-auto">
                <svg class="w-16 h-16 text-slate-600 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <h2 class="text-2xl font-bold text-slate-100 mb-4">
                    <?php esc_html_e('No results found', 'stellar'); ?>
                </h2>
                <p class="text-slate-400 mb-6">
                    <?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'stellar'); ?>
                </p>
                
                <!-- Search Suggestions -->
                <div class="text-left mb-6">
                    <h3 class="text-lg font-semibold text-slate-100 mb-3"><?php esc_html_e('Search suggestions:', 'stellar'); ?></h3>
                    <ul class="text-slate-400 space-y-2">
                        <li>• <?php esc_html_e('Check your spelling', 'stellar'); ?></li>
                        <li>• <?php esc_html_e('Try different keywords', 'stellar'); ?></li>
                        <li>• <?php esc_html_e('Try more general keywords', 'stellar'); ?></li>
                        <li>• <?php esc_html_e('Try fewer keywords', 'stellar'); ?></li>
                    </ul>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" 
                       class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white transition duration-150 ease-in-out group">
                        <?php esc_html_e('Back to Home', 'stellar'); ?> 
                        <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">→</span>
                    </a>
                    
                    <button onclick="document.getElementById('search-field').focus()" 
                            class="btn text-slate-200 hover:text-white bg-slate-900/25 hover:bg-slate-900/30 transition duration-150 ease-in-out">
                        <?php esc_html_e('Try Another Search', 'stellar'); ?>
                    </button>
                </div>
            </div>
        </div>

    <?php endif; ?>

</div>

<style>
/* Pagination Styles */
.stellar-pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
    margin-top: 3rem;
}

.stellar-pagination .page-numbers {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 2.5rem;
    height: 2.5rem;
    padding: 0 0.75rem;
    background: #1e293b;
    border: 1px solid #334155;
    color: #94a3b8;
    text-decoration: none;
    border-radius: 0.5rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.stellar-pagination .page-numbers:hover,
.stellar-pagination .page-numbers.current {
    background: #a855f7;
    border-color: #a855f7;
    color: #ffffff;
}

.stellar-pagination .page-numbers.prev,
.stellar-pagination .page-numbers.next {
    padding: 0 1rem;
}

.stellar-pagination .page-numbers.dots {
    background: transparent;
    border: none;
    color: #64748b;
}

.stellar-pagination .page-numbers.dots:hover {
    background: transparent;
    color: #64748b;
}

/* Line clamp utilities */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

<?php get_footer(); ?>
