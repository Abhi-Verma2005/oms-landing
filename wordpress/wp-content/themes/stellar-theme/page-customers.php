<?php
/**
 * Template Name: Customers Page
 * 
 * @package StellarTheme
 */

get_header(); ?>

<main class="grow">

    <!-- Hero -->
    <section class="relative">
        <!-- Radial gradient -->
        <div class="absolute flex items-center justify-center top-0 -translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-[800px] aspect-square" aria-hidden="true">
            <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-[120px] opacity-30"></div>
            <div class="absolute w-64 h-64 translate-z-0 bg-purple-400 rounded-full blur-[80px] opacity-70"></div>
        </div>

        <!-- Particles animation -->
        <div class="absolute inset-0 h-96 -z-10" aria-hidden="true">
            <canvas data-particle-animation data-particle-quantity="15"></canvas>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-20 md:pt-40 md:pb-24">
                <div class="text-center pb-12 md:pb-20">
                    <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Trusted by thousands</div>
                    <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Our customers love us</h1>
                    <div class="max-w-3xl mx-auto">
                        <p class="text-lg text-slate-400">Join thousands of companies that trust Stellar to secure their applications and protect their users.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    $testimonials = stellar_get_testimonials(6);
                    if ($testimonials) :
                        foreach ($testimonials as $testimonial) :
                            $customer_name = get_post_meta($testimonial->ID, '_testimonial_customer_name', true);
                            $customer_position = get_post_meta($testimonial->ID, '_testimonial_customer_position', true);
                            $customer_company = get_post_meta($testimonial->ID, '_testimonial_customer_company', true);
                            $rating = get_post_meta($testimonial->ID, '_testimonial_rating', true);
                    ?>
                    <div class="relative p-6 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center mb-4">
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <svg class="w-4 h-4 fill-current text-purple-500" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="text-slate-400 mb-4">
                            "<?php echo esc_html($testimonial->post_content); ?>"
                        </blockquote>
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <?php if (has_post_thumbnail($testimonial->ID)) : ?>
                                    <?php echo get_the_post_thumbnail($testimonial->ID, 'thumbnail', array('class' => 'w-10 h-10 rounded-full')); ?>
                                <?php else : ?>
                                    <div class="w-10 h-10 bg-slate-700 rounded-full flex items-center justify-center">
                                        <span class="text-slate-400 font-medium"><?php echo substr($customer_name ?: $testimonial->post_title, 0, 1); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm font-medium text-slate-100"><?php echo esc_html($customer_name ?: $testimonial->post_title); ?></div>
                                <div class="text-sm text-slate-400"><?php echo esc_html($customer_position); ?><?php if ($customer_company) : ?>, <?php echo esc_html($customer_company); ?><?php endif; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    else :
                        // Fallback testimonials
                        $fallback_testimonials = array(
                            array(
                                'content' => 'Stellar has transformed how we handle authentication. The security features are top-notch and the integration was seamless.',
                                'name' => 'Sarah Johnson',
                                'position' => 'CTO',
                                'company' => 'TechCorp'
                            ),
                            array(
                                'content' => 'The best authentication platform we\'ve used. It saved us months of development time and provides enterprise-grade security.',
                                'name' => 'Michael Chen',
                                'position' => 'Lead Developer',
                                'company' => 'StartupXYZ'
                            ),
                            array(
                                'content' => 'Outstanding support and a product that just works. Our team productivity increased significantly after implementing Stellar.',
                                'name' => 'Emily Rodriguez',
                                'position' => 'Product Manager',
                                'company' => 'InnovateLabs'
                            ),
                        );
                        
                        foreach ($fallback_testimonials as $testimonial) :
                    ?>
                    <div class="relative p-6 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl">
                        <div class="flex items-center mb-4">
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <svg class="w-4 h-4 fill-current text-purple-500" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="text-slate-400 mb-4">
                            "<?php echo esc_html($testimonial['content']); ?>"
                        </blockquote>
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 bg-slate-700 rounded-full flex items-center justify-center">
                                    <span class="text-slate-400 font-medium"><?php echo substr($testimonial['name'], 0, 1); ?></span>
                                </div>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm font-medium text-slate-100"><?php echo esc_html($testimonial['name']); ?></div>
                                <div class="text-sm text-slate-400"><?php echo esc_html($testimonial['position']); ?>, <?php echo esc_html($testimonial['company']); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">
                <div class="relative before:absolute before:inset-0 before:bg-gradient-to-r before:from-purple-500 before:to-purple-600 before:opacity-90 before:rounded-2xl">
                    <div class="relative max-w-2xl mx-auto text-center px-4 py-12 md:px-8">
                        <div>
                            <h2 class="h2 text-white mb-4">Ready to join our customers?</h2>
                            <p class="text-lg text-purple-100 mb-8">Start your free trial today and see why thousands of companies trust Stellar.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a class="btn text-white bg-white hover:bg-gray-100 shadow-lg group" href="<?php echo esc_url(wp_registration_url()); ?>">
                                    Start free trial <span class="tracking-normal text-slate-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                </a>
                                <a class="btn text-white hover:text-white transition duration-150 ease-in-out w-full group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="<?php echo esc_url(home_url('/contact/')); ?>">
                                    <span class="relative inline-flex items-center">
                                        Contact sales <span class="tracking-normal text-purple-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
