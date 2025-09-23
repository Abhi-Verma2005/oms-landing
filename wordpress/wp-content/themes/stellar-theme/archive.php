<?php
/**
 * The template for displaying archive pages
 *
 * @package Stellar
 * @since 1.0.0
 */

get_header(); ?>

<div class="max-w-6xl mx-auto px-4 sm:px-6 py-8">

    <!-- Archive Header -->
    <header class="archive-header text-center mb-12">
        <?php if (is_category()) : ?>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-100 mb-4">
                <?php single_cat_title(); ?>
            </h1>
            <?php if (category_description()) : ?>
                <div class="text-lg text-slate-400 max-w-3xl mx-auto">
                    <?php echo category_description(); ?>
                </div>
            <?php endif; ?>
        <?php elseif (is_tag()) : ?>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-100 mb-4">
                <?php single_tag_title(); ?>
            </h1>
            <?php if (tag_description()) : ?>
                <div class="text-lg text-slate-400 max-w-3xl mx-auto">
                    <?php echo tag_description(); ?>
                </div>
            <?php endif; ?>
        <?php elseif (is_author()) : ?>
            <div class="flex items-center justify-center space-x-6 mb-6">
                <?php echo get_avatar(get_the_author_meta('ID'), 96, '', '', array('class' => 'rounded-full')); ?>
                <div class="text-left">
                    <h1 class="text-4xl md:text-5xl font-bold text-slate-100 mb-2">
                        <?php echo get_the_author(); ?>
                    </h1>
                    <?php if (get_the_author_meta('description')) : ?>
                        <p class="text-lg text-slate-400"><?php the_author_meta('description'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php elseif (is_date()) : ?>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-100 mb-4">
                <?php
                if (is_year()) {
                    echo get_the_date('Y');
                } elseif (is_month()) {
                    echo get_the_date('F Y');
                } elseif (is_day()) {
                    echo get_the_date('F j, Y');
                }
                ?>
            </h1>
            <p class="text-lg text-slate-400"><?php esc_html_e('Archive', 'stellar'); ?></p>
        <?php else : ?>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-100 mb-4">
                <?php esc_html_e('Archive', 'stellar'); ?>
            </h1>
        <?php endif; ?>
    </header>

    <!-- Posts Grid -->
    <?php if (have_posts()) : ?>
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
                            <time class="published" datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                            
                            <?php if (get_the_category()) : ?>
                                <span class="categories">
                                    <?php the_category(', '); ?>
                                </span>
                            <?php endif; ?>
                            
                            <span class="reading-time">
                                <?php stellar_display_reading_time(); ?>
                            </span>
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
                        
                        <!-- Author -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <?php echo get_avatar(get_the_author_meta('ID'), 32, '', '', array('class' => 'rounded-full')); ?>
                                <div>
                                    <div class="text-sm font-medium text-slate-300">
                                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="hover:text-purple-400 transition-colors">
                                            <?php the_author(); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="text-purple-500 hover:text-purple-400 transition-colors font-medium">
                                <?php esc_html_e('Read more', 'stellar'); ?> →
                            </a>
                        </div>
                        
                        <!-- Tags -->
                        <?php if (get_the_tags()) : ?>
                            <div class="mt-4 pt-4 border-t border-slate-700">
                                <div class="flex flex-wrap gap-2">
                                    <?php
                                    $tags = get_the_tags();
                                    $tag_count = 0;
                                    foreach ($tags as $tag) {
                                        if ($tag_count >= 3) break; // Limit to 3 tags
                                        echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="px-2 py-1 bg-slate-700 text-slate-300 rounded text-xs hover:bg-purple-600 hover:text-white transition-colors">';
                                        echo esc_html($tag->name);
                                        echo '</a>';
                                        $tag_count++;
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        
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
        
        <!-- No Posts Found -->
        <div class="text-center py-12">
            <div class="max-w-md mx-auto">
                <svg class="w-16 h-16 text-slate-600 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <h2 class="text-2xl font-bold text-slate-100 mb-4">
                    <?php esc_html_e('No posts found', 'stellar'); ?>
                </h2>
                <p class="text-slate-400 mb-6">
                    <?php esc_html_e('Sorry, no posts were found for this archive.', 'stellar'); ?>
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>" 
                   class="inline-flex items-center px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-lg transition-colors">
                    <?php esc_html_e('Back to Home', 'stellar'); ?>
                </a>
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
