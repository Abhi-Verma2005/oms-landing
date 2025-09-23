<?php
/**
 * The template for displaying all single posts
 *
 * @package Stellar
 * @since 1.0.0
 */

get_header(); ?>

<div class="max-w-4xl mx-auto px-4 sm:px-6 py-8">

    <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-slate-800 rounded-lg border border-slate-700 p-8'); ?>>

            <!-- Post Header -->
            <header class="entry-header mb-8">
                
                <!-- Breadcrumbs -->
                <?php stellar_breadcrumbs(); ?>
                
                <h1 class="entry-title text-3xl md:text-4xl font-bold text-slate-100 mb-4">
                    <?php the_title(); ?>
                </h1>
                
                <div class="entry-meta flex items-center space-x-4 text-sm text-slate-400">
                    <time class="published" datetime="<?php echo get_the_date('c'); ?>">
                        <?php echo get_the_date(); ?>
                    </time>
                    
                    <?php if (get_the_author_meta('display_name')) : ?>
                        <span class="author">
                            <?php esc_html_e('by', 'stellar'); ?> 
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="text-purple-500 hover:text-purple-400 transition-colors">
                                <?php the_author(); ?>
                            </a>
                        </span>
                    <?php endif; ?>
                    
                    <?php if (get_the_category()) : ?>
                        <span class="categories">
                            <?php esc_html_e('in', 'stellar'); ?> 
                            <?php the_category(', '); ?>
                        </span>
                    <?php endif; ?>
                    
                    <span class="reading-time">
                        <?php stellar_display_reading_time(); ?>
                    </span>
                </div>
            </header>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="entry-featured-image mb-8">
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-64 md:h-96 object-cover rounded-lg')); ?>
                </div>
            <?php endif; ?>

            <!-- Post Content -->
            <div class="entry-content prose prose-lg prose-slate prose-invert max-w-none">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'stellar') . '</span>',
                    'after'  => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ));
                ?>
            </div>

            <!-- Post Footer -->
            <footer class="entry-footer mt-8 pt-8 border-t border-slate-700">
                
                <!-- Tags -->
                <?php if (get_the_tags()) : ?>
                    <div class="post-tags mb-6">
                        <h4 class="text-sm font-semibold text-slate-300 mb-3"><?php esc_html_e('Tags:', 'stellar'); ?></h4>
                        <div class="flex flex-wrap gap-2">
                            <?php
                            $tags = get_the_tags();
                            foreach ($tags as $tag) {
                                echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="px-3 py-1 bg-slate-700 text-slate-300 rounded-full text-sm hover:bg-purple-600 hover:text-white transition-colors">';
                                echo esc_html($tag->name);
                                echo '</a>';
                            }
                            ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Share Buttons -->
                <div class="post-share mb-6">
                    <h4 class="text-sm font-semibold text-slate-300 mb-3"><?php esc_html_e('Share this post:', 'stellar'); ?></h4>
                    <div class="flex space-x-4">
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" 
                           target="_blank" 
                           class="flex items-center justify-center w-10 h-10 bg-slate-700 text-slate-300 rounded-full hover:bg-blue-500 hover:text-white transition-colors">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
                           target="_blank" 
                           class="flex items-center justify-center w-10 h-10 bg-slate-700 text-slate-300 rounded-full hover:bg-blue-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" 
                           target="_blank" 
                           class="flex items-center justify-center w-10 h-10 bg-slate-700 text-slate-300 rounded-full hover:bg-blue-700 hover:text-white transition-colors">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        
                        <button onclick="navigator.clipboard.writeText('<?php echo esc_js(get_permalink()); ?>')" 
                                class="flex items-center justify-center w-10 h-10 bg-slate-700 text-slate-300 rounded-full hover:bg-purple-600 hover:text-white transition-colors"
                                title="<?php esc_attr_e('Copy link', 'stellar'); ?>">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Author Bio -->
                <?php if (get_the_author_meta('description')) : ?>
                    <div class="author-bio p-6 bg-slate-700 rounded-lg">
                        <div class="flex items-start space-x-4">
                            <?php echo get_avatar(get_the_author_meta('ID'), 64, '', '', array('class' => 'rounded-full')); ?>
                            <div>
                                <h4 class="font-semibold text-slate-100 mb-2">
                                    <?php esc_html_e('About', 'stellar'); ?> <?php the_author(); ?>
                                </h4>
                                <p class="text-slate-300"><?php the_author_meta('description'); ?></p>
                                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" 
                                   class="inline-block mt-2 text-purple-500 hover:text-purple-400 transition-colors">
                                    <?php esc_html_e('View all posts by', 'stellar'); ?> <?php the_author(); ?> →
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </footer>

        </article>

        <!-- Related Posts -->
        <?php
        $related_posts = stellar_get_related_posts(get_the_ID(), 3);
        if ($related_posts->have_posts()) :
        ?>
            <section class="related-posts mt-12">
                <h3 class="text-2xl font-bold text-slate-100 mb-8"><?php esc_html_e('Related Posts', 'stellar'); ?></h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                        <article class="bg-slate-800 rounded-lg border border-slate-700 overflow-hidden hover:border-purple-500 transition-colors">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="aspect-video overflow-hidden">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="p-6">
                                <h4 class="font-semibold text-slate-100 mb-2 line-clamp-2">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-purple-400 transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <p class="text-slate-400 text-sm mb-3 line-clamp-2">
                                    <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                </p>
                                <div class="flex items-center justify-between text-xs text-slate-500">
                                    <time datetime="<?php echo get_the_date('c'); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                    <span class="reading-time">
                                        <?php stellar_display_reading_time(); ?>
                                    </span>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            </section>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <!-- Comments -->
        <?php
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>

        <!-- Navigation -->
        <nav class="post-navigation mt-12">
            <div class="flex justify-between items-center">
                <div class="prev-post">
                    <?php
                    $prev_post = get_previous_post();
                    if ($prev_post) :
                    ?>
                        <a href="<?php echo get_permalink($prev_post->ID); ?>" 
                           class="flex items-center space-x-3 p-4 bg-slate-800 rounded-lg border border-slate-700 hover:border-purple-500 transition-colors">
                            <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                            <div>
                                <div class="text-sm text-slate-400"><?php esc_html_e('Previous Post', 'stellar'); ?></div>
                                <div class="text-slate-100 font-medium"><?php echo get_the_title($prev_post->ID); ?></div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
                
                <div class="next-post">
                    <?php
                    $next_post = get_next_post();
                    if ($next_post) :
                    ?>
                        <a href="<?php echo get_permalink($next_post->ID); ?>" 
                           class="flex items-center space-x-3 p-4 bg-slate-800 rounded-lg border border-slate-700 hover:border-purple-500 transition-colors">
                            <div class="text-right">
                                <div class="text-sm text-slate-400"><?php esc_html_e('Next Post', 'stellar'); ?></div>
                                <div class="text-slate-100 font-medium"><?php echo get_the_title($next_post->ID); ?></div>
                            </div>
                            <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>

    <?php endwhile; ?>

</div>

<?php get_footer(); ?>
