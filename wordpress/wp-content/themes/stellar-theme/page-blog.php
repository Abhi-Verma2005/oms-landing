<?php
/**
 * Template Name: Blog Page
 *
 * Lists recent blog posts in a grid
 *
 * @package StellarTheme
 */

get_header(); ?>

<main class="grow">

    <section class="relative">
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">

                <div class="max-w-3xl mx-auto text-center pb-12">
                    <h1 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60">Blog</h1>
                    <p class="text-slate-400 mt-4">Read our latest articles, updates and insights.</p>
                </div>

                <?php
                $paged = max(1, get_query_var('paged'));
                $query = new WP_Query(array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                ));
                ?>

                <?php if ($query->have_posts()) : ?>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" data-aos="fade-up">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <article class="relative group">
                                <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                                <div class="relative px-7 py-6 bg-slate-800 rounded-lg border border-slate-700">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="mb-4">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover rounded-lg')); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <h3 class="text-xl font-bold text-slate-100 mb-2">
                                        <a href="<?php the_permalink(); ?>" class="hover:text-purple-400 transition-colors"><?php the_title(); ?></a>
                                    </h3>
                                    <p class="text-slate-400 mb-4"><?php echo wp_trim_words(get_the_excerpt(), 22, '…'); ?></p>
                                    <div class="flex items-center justify-between">
                                        <time class="text-sm text-slate-500" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                        <a class="text-purple-500 hover:text-purple-400 transition-colors" href="<?php the_permalink(); ?>">Read more →</a>
                                    </div>
                                </div>
                            </article>
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
                    <p class="text-center text-slate-400"><?php esc_html_e('No posts found.', 'stellar'); ?></p>
                <?php endif; wp_reset_postdata(); ?>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>




