<?php
/**
 * The main template file
 *
 * @package Stellar
 * @since 1.0.0
 */

get_header(); ?>

<!-- Hero Section -->
<section>
    <div class="relative max-w-6xl mx-auto px-4 sm:px-6">

        <!-- Particles animation -->
        <div class="absolute inset-0 -z-10" aria-hidden="true">
            <canvas data-particle-animation></canvas>
        </div>

        <!-- Illustration -->
        <div class="absolute inset-0 -z-10 -mx-28 rounded-b-[3rem] pointer-events-none overflow-hidden" aria-hidden="true">
            <div class="absolute left-1/2 -translate-x-1/2 bottom-0 -z-10">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/glow-bottom.svg" class="max-w-none" width="2146" height="774" alt="Hero Illustration">
            </div>
        </div>

        <div class="pt-32 pb-16 md:pt-52 md:pb-32">

            <!-- Hero content -->
            <div class="max-w-3xl mx-auto text-center">
                <div class="mb-6" data-aos="fade-down">
                    <div class="inline-flex relative before:absolute before:inset-0 before:bg-purple-500 before:blur-md">
                        <a class="btn-sm py-0.5 text-slate-300 hover:text-white transition duration-150 ease-in-out group [background:linear-gradient(var(--color-purple-500),var(--color-purple-500))_padding-box,linear-gradient(var(--color-purple-500),var(--color-purple-200)_75%,transparent_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/50 before:rounded-full before:pointer-events-none shadow-sm" href="#">
                            <span class="relative inline-flex items-center">
                                <?php esc_html_e('API Studio is now in beta', 'stellar'); ?> <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                            </span>
                        </a>
                    </div>
                </div>
                <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4" data-aos="fade-down">
                    <?php echo esc_html(get_theme_mod('hero_title', 'The API Security Framework')); ?>
                </h1>
                <p class="text-lg text-slate-300 mb-8" data-aos="fade-down" data-aos-delay="200">
                    <?php echo esc_html(get_theme_mod('hero_subtitle', 'Our landing page template works on all devices, so you only have to set it up once, and get beautiful results forever.')); ?>
                </p>
                <div class="max-w-xs mx-auto sm:max-w-none sm:inline-flex sm:justify-center space-y-4 sm:space-y-0 sm:space-x-4" data-aos="fade-down" data-aos-delay="400">
                    <div>
                        <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="#">
                            <?php esc_html_e('Get Started', 'stellar'); ?> <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                        </a>
                    </div>
                    <div>
                        <a class="btn text-slate-200 hover:text-white bg-slate-900/25 hover:bg-slate-900/30 w-full transition duration-150 ease-in-out" href="#">
                            <svg class="shrink-0 fill-slate-300 mr-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16">
                                <path d="m1.999 0 1 2-1 2 2-1 2 1-1-2 1-2-2 1zM11.999 0l1 2-1 2 2-1 2 1-1-2 1-2-2 1zM11.999 10l1 2-1 2 2-1 2 1-1-2 1-2-2 1zM6.292 7.586l2.646-2.647L11.06 7.06 8.413 9.707zM0 13.878l5.586-5.586 2.122 2.121L2.12 16z" />
                            </svg>
                            <span><?php esc_html_e('Read the docs', 'stellar'); ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clients Section -->
<section>
    <div class="relative max-w-6xl mx-auto px-4 sm:px-6">

        <!-- Particles animation -->
        <div class="absolute inset-0 max-w-6xl mx-auto px-4 sm:px-6">
            <div class="absolute inset-0 -z-10" aria-hidden="true">
                <canvas data-particle-animation data-particle-quantity="5"></canvas>
            </div>
        </div>

        <div class="py-12 md:py-16">
            <div class="overflow-hidden">
                <div class="inline-flex w-full flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
                    <ul class="flex animate-infinite-scroll items-center justify-center md:justify-start [&_img]:max-w-none [&_li]:mx-8">
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/client-01.svg" alt="Client 1"></li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/client-02.svg" alt="Client 2"></li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/client-03.svg" alt="Client 3"></li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/client-04.svg" alt="Client 4"></li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/client-05.svg" alt="Client 5"></li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/client-06.svg" alt="Client 6"></li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/client-07.svg" alt="Client 7"></li>
                        <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/client-08.svg" alt="Client 8"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<?php
$features_query = new WP_Query(array(
    'post_type' => 'feature',
    'posts_per_page' => 6,
    'post_status' => 'publish'
));

if ($features_query->have_posts()) :
?>
<section class="relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="py-12 md:py-20">
            
            <!-- Section header -->
            <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">
                    <?php esc_html_e('Everything you need to get started', 'stellar'); ?>
                </h2>
                <p class="text-lg text-slate-400">
                    <?php esc_html_e('Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus nulla.', 'stellar'); ?>
                </p>
            </div>

            <!-- Features grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" data-aos="fade-up">
                <?php while ($features_query->have_posts()) : $features_query->the_post(); ?>
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
                                <a href="<?php the_permalink(); ?>" class="hover:text-purple-400 transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <?php if (has_excerpt()) : ?>
                                <p class="text-slate-400"><?php the_excerpt(); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            
        </div>
    </div>
</section>
<?php 
wp_reset_postdata();
endif; ?>

<!-- Blog Posts Section -->
<?php
$recent_posts = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post_status' => 'publish'
));

if ($recent_posts->have_posts()) :
?>
<section class="relative">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="py-12 md:py-20">
            
            <!-- Section header -->
            <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">
                    <?php esc_html_e('Latest from our blog', 'stellar'); ?>
                </h2>
                <p class="text-lg text-slate-400">
                    <?php esc_html_e('Stay updated with our latest news and insights.', 'stellar'); ?>
                </p>
            </div>

            <!-- Blog grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" data-aos="fade-up">
                <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
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
                                <a href="<?php the_permalink(); ?>" class="hover:text-purple-400 transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p class="text-slate-400 mb-4"><?php the_excerpt(); ?></p>
                            <div class="flex items-center justify-between">
                                <time class="text-sm text-slate-500" datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                                <a class="text-purple-500 hover:text-purple-400 transition-colors" href="<?php the_permalink(); ?>">
                                    <?php esc_html_e('Read more', 'stellar'); ?> →
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
        </div>
    </div>
</section>
<?php 
wp_reset_postdata();
endif; ?>

<!-- CTA Section -->
<section class="relative">
    <div class="absolute left-1/2 -translate-x-1/2 top-0 -z-10 w-80 h-80 -mt-24">
        <div class="absolute inset-0 -z-10" aria-hidden="true">
            <canvas data-particle-animation data-particle-quantity="6" data-particle-staticity="30"></canvas>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="relative px-8 py-12 md:py-20 border-t border-b [border-image:linear-gradient(to_right,transparent,var(--color-slate-800),transparent)1]">
            <!-- Content -->
            <div class="max-w-3xl mx-auto text-center">
                <div>
                    <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">
                        <?php esc_html_e('The security first platform', 'stellar'); ?>
                    </div>
                </div>
                <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">
                    <?php esc_html_e('Supercharge your security', 'stellar'); ?>
                </h2>
                <p class="text-lg text-slate-400 mb-8">
                    <?php esc_html_e('All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'stellar'); ?>
                </p>
                <div>
                    <a class="btn text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white transition duration-150 ease-in-out group" href="#">
                        <?php esc_html_e('Start Building', 'stellar'); ?> <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
