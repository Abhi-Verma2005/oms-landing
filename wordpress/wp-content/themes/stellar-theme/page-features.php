<?php
/**
 * Template Name: Features Page
 *
 * Lists Feature items in a styled grid
 *
 * @package StellarTheme
 */

get_header(); ?>

<main class="grow">

    <section class="relative">
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">

                <!-- Page header -->
                <div class="max-w-3xl mx-auto text-center pb-12">
                    <h1 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60"><?php esc_html_e('Features', 'stellar'); ?></h1>
                    <p class="text-slate-400 mt-4"><?php esc_html_e('Explore what you can build with our platform.', 'stellar'); ?></p>
                </div>

                <?php
                $paged = max(1, get_query_var('paged'));
                $query = new WP_Query(array(
                    'post_type' => 'feature',
                    'post_status' => 'publish',
                    'posts_per_page' => 12,
                    'paged' => $paged,
                ));
                ?>

                <?php if ($query->have_posts()) : ?>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" data-aos="fade-up">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="relative group">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                                <div class="relative px-7 py-6 bg-slate-800 rounded-lg border border-slate-700">
                                    <div class="flex items-center justify-between w-full mb-4">
                                        <div class="flex items-center justify-center w-12 h-12 bg-purple-500 rounded-lg">
                                            <svg class="w-6 h-6 fill-current text-white" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                            </svg>
                                        </div>
                                        <a class="text-slate-500 hover:text-purple-500 transition-colors" href="<?php the_permalink(); ?>">
                                            <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <h3 class="text-xl font-bold text-slate-100 mb-2">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-purple-400 transition-colors"><?php the_title(); ?></a>
                                    </h3>
                                    <?php if (has_excerpt()) : ?>
                                        <p class="text-slate-400"><?php the_excerpt(); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="mt-10">
                        <?php
                        echo paginate_links(array(
                            'total' => $query->max_num_pages,
                            'prev_text' => '←',
                            'next_text' => '→',
                            'class' => 'flex space-x-2 justify-center text-slate-300',
                        ));
                        ?>
                    </div>
                <?php else : ?>
                    <p class="text-center text-slate-400"><?php esc_html_e('No features found.', 'stellar'); ?></p>
                <?php endif; wp_reset_postdata(); ?>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>




