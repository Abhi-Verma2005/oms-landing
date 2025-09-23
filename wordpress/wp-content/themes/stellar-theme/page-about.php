<?php
/**
 * Template Name: About Page
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

        <!-- Illustration -->
        <div class="md:block absolute left-1/2 -translate-x-1/2 -mt-16 blur-2xl opacity-90 pointer-events-none -z-10" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page-illustration.svg" class="max-w-none" width="1440" height="427" alt="Page Illustration">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-10 md:pt-40">

                <!-- Hero content -->
                <div class="text-center">
                    <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">The folks behind the product</div>
                    <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-6">Turning security into innovation</h1>
                    <!-- Rings illustration -->
                    <div class="inline-flex items-center justify-center relative">
                        <!-- Particles animation -->
                        <div class="absolute inset-0 -z-10" aria-hidden="true">
                            <canvas data-particle-animation data-particle-quantity="10"></canvas>
                        </div>
                        <div class="inline-flex [mask-image:_radial-gradient(circle_at_bottom,transparent_15%,black_70%)]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-illustration.svg" width="446" height="446" alt="About illustration" />
                        </div>
                        <img class="absolute mt-[30%] drop-shadow-lg animate-float" src="<?php echo get_template_directory_uri(); ?>/assets/images/about-icon.svg" width="72" height="72" alt="About icon" />
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Story -->
    <section class="relative">

        <!-- Blurred shape -->
        <div class="absolute top-0 -mt-32 left-1/2 -translate-x-1/2 ml-10 blur-2xl opacity-70 pointer-events-none -z-10" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                <defs>
                    <linearGradient id="bs4-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                        <stop offset="0%" stop-color="#A855F7"></stop>
                        <stop offset="100%" stop-color="#6366F1" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
                <path fill="url(#bs4-a)" fill-rule="evenodd" d="m0 0 461 369-284 58z" transform="matrix(1 0 0 -1 0 427)"></path>
            </svg>
        </div>

        <div class="px-4 sm:px-6">
            <div class="max-w-5xl mx-auto">
                <div class="pb-12 md:pb-20">
                
                    <!-- Section header -->
                    <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                        <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60">Our story (so far)</h2>
                    </div>
                
                    <div class="md:flex justify-between space-x-6 md:space-x-8 lg:space-x-14">
                        <figure class="min-w-[240px]">
                            <img class="sticky top-8 mx-auto mb-12 md:mb-0 rounded-lg -rotate-[4deg]" src="<?php echo get_template_directory_uri(); ?>/assets/images/team.jpg" width="420" height="280" alt="Team" />
                        </figure>
                        <div class="max-w-[548px] mx-auto">
                            <div class="text-slate-400 space-y-6">
                                <p>
                                    We came together over a shared excitement about building a product that could solve our own problem of where our next favourite hack is coming from. But also a product that helps everyone thrive in this market: from founders and engineers to companies and investors.
                                </p>
                                <p>
                                    Stellar is a product that connects people around the topics and ideas that fascinate them. <strong class="text-slate-50 font-medium">The idea that we can use technology to take our experience</strong>, as security lovers, to a new dimension and leave the computer industry in better shape while we're at it.
                                </p>
                                <p>
                                    You can dive into the atoms that make up a product, share the moments that move you and discuss the ideas you find compelling. We want to create a ground for <strong class="text-slate-50 font-medium">discussion and bring knowledge together</strong>, while making it more accessible and easier to grasp.
                                </p>
                                <p>
                                    Contrary to popular belief, this product is not random security. It has roots in a piece of classical literature, making it over 5 years old. Richard McClintock, a professor at <a class="text-purple-500 font-medium hover:underline" href="#0">Hampden-Sydney College</a> in Virginia, looked up one of the more obscure words, consectetur from a passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                                </p>
                                <p>
                                    We all thrive on learning something new every day and everyone is constantly trying on different hats. We are working with new technologies while rethinking an old industry and are excited about all the possibilities and opportunities to innovate.
                                    It's a problem deeply ingrained in traditional sectors like startups and the wider service industry but which has been compounded in the past five to ten years by the emergence of the mostly tech-powered gig economy which has created a new generation of shift workers and indeed
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="relative">
        <!-- Radial gradient -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none -z-10" aria-hidden="true">
            <div class="absolute flex items-center justify-center top-0 -translate-y-1/2 left-1/2 -translate-x-1/2 w-1/3 aspect-square">
                <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-[120px] opacity-50"></div>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">
                <!-- Content -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">We are a happy, small team</h2>
                    <p class="text-lg text-slate-400">Various versions of Lorem Ipsum have evolved over the years, sometimes by accident, sometimes on purpose, and by injecting humour and the like.</p>
                </div>
                <!-- Team members -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2 sm:gap-6">
                    <?php
                    $team_members = stellar_get_team_members(12);
                    if ($team_members) :
                        foreach ($team_members as $member) :
                            $position = get_post_meta($member->ID, '_team_member_position', true);
                            $twitter = get_post_meta($member->ID, '_team_member_social_twitter', true);
                            $linkedin = get_post_meta($member->ID, '_team_member_social_linkedin', true);
                            $github = get_post_meta($member->ID, '_team_member_social_github', true);
                    ?>
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <?php if (has_post_thumbnail($member->ID)) : ?>
                                <?php echo get_the_post_thumbnail($member->ID, 'thumbnail', array('class' => 'shrink-0 w-12 h-12 rounded-full object-cover')); ?>
                            <?php else : ?>
                                <div class="shrink-0 w-12 h-12 bg-slate-700 rounded-full flex items-center justify-center">
                                    <span class="text-slate-400 font-medium"><?php echo substr($member->post_title, 0, 1); ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5"><?php echo esc_html($member->post_title); ?></div>
                                <div class="text-sm text-purple-500 font-medium"><?php echo esc_html($position); ?></div>
                            </div>
                        </div>
                        <?php if ($twitter || $linkedin || $github) : ?>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="<?php echo esc_url($twitter ?: $linkedin ?: $github); ?>" aria-label="Member's Social" target="_blank" rel="noopener">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php
                        endforeach;
                    else :
                        // Fallback team members if no custom post type data
                        $fallback_team = array(
                            array('name' => 'Sarah Barnekow', 'position' => 'CEO & Co-founder'),
                            array('name' => 'Alex Suevalov', 'position' => 'Tech Lead'),
                            array('name' => 'Mark Lamprecht', 'position' => 'Software Engineer'),
                            array('name' => 'Scott Bailey', 'position' => 'Software Engineer'),
                            array('name' => 'Vedant Hegde', 'position' => 'Customer Experience'),
                            array('name' => 'Lucy Radux', 'position' => 'Marketing Manager'),
                            array('name' => 'Devani Janssen', 'position' => 'Product Design'),
                            array('name' => 'Dima Trystram', 'position' => 'Customer Success'),
                        );
                        
                        foreach ($fallback_team as $member) :
                    ?>
                    <div class="relative flex items-center justify-between py-4 pl-4 pr-3 group before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-0 hover:before:opacity-10 focus-within:before:opacity-10 before:rounded-xl before:transition-opacity">
                        <div class="flex items-center space-x-4">
                            <div class="shrink-0 w-12 h-12 bg-slate-700 rounded-full flex items-center justify-center">
                                <span class="text-slate-400 font-medium"><?php echo substr($member['name'], 0, 1); ?></span>
                            </div>
                            <div class="grow">
                                <div class="font-bold text-slate-100 mb-0.5"><?php echo esc_html($member['name']); ?></div>
                                <div class="text-sm text-purple-500 font-medium"><?php echo esc_html($member['position']); ?></div>
                            </div>
                        </div>
                        <a class="shrink-0 text-slate-500 md:opacity-0 group-hover:opacity-100 focus-within:opacity-100 transition-opacity focus:outline-hidden group-hover:before:absolute group-hover:before:inset-0" href="#0" aria-label="Member's Social">
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                                <path d="M11.297 13.807 7.424 18H5.276l5.019-5.436L5 6h4.43l3.06 3.836L16.025 6h2.147l-4.688 5.084L19 18h-4.32l-3.383-4.193Zm3.975 2.975h1.19L8.783 7.155H7.507l7.766 9.627Z" />
                            </svg>
                        </a>
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
                            <h2 class="h2 text-white mb-4">Ready to get started?</h2>
                            <p class="text-lg text-purple-100 mb-8">We'd love to have you on our team. We're always looking for talented people to join us.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a class="btn text-white bg-white hover:bg-gray-100 shadow-lg group" href="<?php echo esc_url(wp_registration_url()); ?>">
                                    View open positions <span class="tracking-normal text-slate-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                </a>
                                <a class="btn text-white hover:text-white transition duration-150 ease-in-out w-full group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="<?php echo esc_url(home_url('/contact/')); ?>">
                                    <span class="relative inline-flex items-center">
                                        Contact us <span class="tracking-normal text-purple-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
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