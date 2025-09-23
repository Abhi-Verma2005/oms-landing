<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Stellar
 * @since 1.0.0
 */

get_header(); ?>

<div class="max-w-4xl mx-auto px-4 sm:px-6 py-16">

    <div class="text-center">
        
        <!-- 404 Illustration -->
        <div class="mb-8">
            <div class="relative">
                <!-- Particles animation -->
                <div class="absolute inset-0 -z-10" aria-hidden="true">
                    <canvas data-particle-animation data-particle-quantity="20"></canvas>
                </div>
                
                <!-- 404 Number -->
                <div class="text-8xl md:text-9xl font-bold bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 mb-4">
                    404
                </div>
                
                <!-- Floating icon -->
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <img class="w-16 h-16 animate-float" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about-icon.svg" alt="<?php esc_attr_e('404 Icon', 'stellar'); ?>" />
                </div>
            </div>
        </div>

        <!-- Error Message -->
        <div class="mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-100 mb-4">
                <?php esc_html_e('Page Not Found', 'stellar'); ?>
            </h1>
            <p class="text-lg text-slate-400 max-w-2xl mx-auto">
                <?php esc_html_e('Sorry, the page you are looking for could not be found. It might have been moved, deleted, or you entered the wrong URL.', 'stellar'); ?>
            </p>
        </div>

        <!-- Search Form -->
        <div class="mb-8 max-w-md mx-auto">
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

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
            <a href="<?php echo esc_url(home_url('/')); ?>" 
               class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white transition duration-150 ease-in-out group">
                <?php esc_html_e('Back to Home', 'stellar'); ?> 
                <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">→</span>
            </a>
            
            <a href="javascript:history.back()" 
               class="btn text-slate-200 hover:text-white bg-slate-900/25 hover:bg-slate-900/30 transition duration-150 ease-in-out">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                <?php esc_html_e('Go Back', 'stellar'); ?>
            </a>
        </div>

        <!-- Popular Pages -->
        <div class="mb-12">
            <h3 class="text-xl font-semibold text-slate-100 mb-6">
                <?php esc_html_e('Popular Pages', 'stellar'); ?>
            </h3>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-3xl mx-auto">
                <?php
                $popular_pages = get_pages(array(
                    'sort_column' => 'post_date',
                    'sort_order' => 'desc',
                    'number' => 6,
                ));
                
                if ($popular_pages) :
                    foreach ($popular_pages as $page) :
                ?>
                    <a href="<?php echo get_permalink($page->ID); ?>" 
                       class="block p-4 bg-slate-800 border border-slate-700 rounded-lg hover:border-purple-500 transition-colors group">
                        <h4 class="font-medium text-slate-100 group-hover:text-purple-400 transition-colors">
                            <?php echo esc_html($page->post_title); ?>
                        </h4>
                        <?php if ($page->post_excerpt) : ?>
                            <p class="text-sm text-slate-400 mt-1">
                                <?php echo wp_trim_words($page->post_excerpt, 10); ?>
                            </p>
                        <?php endif; ?>
                    </a>
                <?php 
                    endforeach;
                else :
                ?>
                    <!-- Fallback links -->
                    <a href="<?php echo esc_url(home_url('/about')); ?>" 
                       class="block p-4 bg-slate-800 border border-slate-700 rounded-lg hover:border-purple-500 transition-colors group">
                        <h4 class="font-medium text-slate-100 group-hover:text-purple-400 transition-colors">
                            <?php esc_html_e('About Us', 'stellar'); ?>
                        </h4>
                        <p class="text-sm text-slate-400 mt-1">
                            <?php esc_html_e('Learn more about our company', 'stellar'); ?>
                        </p>
                    </a>
                    
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" 
                       class="block p-4 bg-slate-800 border border-slate-700 rounded-lg hover:border-purple-500 transition-colors group">
                        <h4 class="font-medium text-slate-100 group-hover:text-purple-400 transition-colors">
                            <?php esc_html_e('Blog', 'stellar'); ?>
                        </h4>
                        <p class="text-sm text-slate-400 mt-1">
                            <?php esc_html_e('Read our latest articles', 'stellar'); ?>
                        </p>
                    </a>
                    
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" 
                       class="block p-4 bg-slate-800 border border-slate-700 rounded-lg hover:border-purple-500 transition-colors group">
                        <h4 class="font-medium text-slate-100 group-hover:text-purple-400 transition-colors">
                            <?php esc_html_e('Contact', 'stellar'); ?>
                        </h4>
                        <p class="text-sm text-slate-400 mt-1">
                            <?php esc_html_e('Get in touch with us', 'stellar'); ?>
                        </p>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Recent Posts -->
        <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 3,
            'post_status' => 'publish'
        ));
        
        if ($recent_posts) :
        ?>
            <div class="mb-12">
                <h3 class="text-xl font-semibold text-slate-100 mb-6">
                    <?php esc_html_e('Recent Posts', 'stellar'); ?>
                </h3>
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
                    <?php foreach ($recent_posts as $post) : ?>
                        <article class="bg-slate-800 border border-slate-700 rounded-lg overflow-hidden hover:border-purple-500 transition-colors group">
                            <?php if (has_post_thumbnail($post['ID'])) : ?>
                                <div class="aspect-video overflow-hidden">
                                    <a href="<?php echo get_permalink($post['ID']); ?>">
                                        <?php echo get_the_post_thumbnail($post['ID'], 'medium', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="p-4">
                                <time class="text-sm text-slate-400">
                                    <?php echo get_the_date('', $post['ID']); ?>
                                </time>
                                <h4 class="font-medium text-slate-100 mt-1 group-hover:text-purple-400 transition-colors">
                                    <a href="<?php echo get_permalink($post['ID']); ?>">
                                        <?php echo esc_html($post['post_title']); ?>
                                    </a>
                                </h4>
                                <p class="text-sm text-slate-400 mt-2 line-clamp-2">
                                    <?php echo wp_trim_words($post['post_content'], 15); ?>
                                </p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Help Section -->
        <div class="bg-slate-800 border border-slate-700 rounded-lg p-8">
            <h3 class="text-xl font-semibold text-slate-100 mb-4">
                <?php esc_html_e('Still need help?', 'stellar'); ?>
            </h3>
            <p class="text-slate-400 mb-6">
                <?php esc_html_e('If you can\'t find what you\'re looking for, feel free to contact us and we\'ll be happy to help.', 'stellar'); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" 
                   class="btn-sm bg-purple-600 hover:bg-purple-700 text-white transition-colors">
                    <?php esc_html_e('Contact Support', 'stellar'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/help')); ?>" 
                   class="btn-sm text-slate-300 hover:text-white bg-slate-900/25 hover:bg-slate-900/30 transition-colors">
                    <?php esc_html_e('Help Center', 'stellar'); ?>
                </a>
            </div>
        </div>

    </div>

</div>

<style>
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

<?php get_footer(); ?>
