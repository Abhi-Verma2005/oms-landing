<?php
/**
 * Template Name: Contact Page
 *
 * @package StellarTheme
 */

get_header(); ?>

<main class="grow">

    <section class="relative">

        <!-- Illustration -->
        <div class="md:block absolute left-1/2 -translate-x-1/2 -mt-36 blur-2xl opacity-70 pointer-events-none -z-10" aria-hidden="true">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/auth-illustration.svg" class="max-w-none" width="1440" height="450" alt="Page Illustration">
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-20">

                <!-- Page header -->
                <div class="max-w-3xl mx-auto text-center pb-12">
                    <!-- Logo -->
                    <div class="mb-5">
                        <a class="inline-flex" href="<?php echo esc_url(home_url('/')); ?>">
                            <div class="relative flex items-center justify-center w-16 h-16 border border-transparent rounded-2xl shadow-2xl [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-2xl">
                                <img class="relative" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="42" height="42" alt="<?php bloginfo('name'); ?>">
                            </div>
                        </a>
                    </div>
                    <h1 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60">Contact us</h1>
                    <p class="text-slate-400 mt-4">We'd love to hear from you. Send us a message and we'll respond soon.</p>
                </div>

                <!-- Form -->
                <div class="max-w-lg mx-auto">
                    <form method="post" action="#">
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm text-slate-300 font-medium mb-1" for="contact_name">Name</label>
                                <input id="contact_name" name="contact_name" class="form-input w-full" type="text" required />
                            </div>
                            <div>
                                <label class="block text-sm text-slate-300 font-medium mb-1" for="contact_email">Email</label>
                                <input id="contact_email" name="contact_email" class="form-input w-full" type="email" required />
                            </div>
                            <div>
                                <label class="block text-sm text-slate-300 font-medium mb-1" for="contact_message">Message</label>
                                <textarea id="contact_message" name="contact_message" rows="5" class="form-textarea w-full" required></textarea>
                            </div>
                        </div>
                        <div class="mt-6">
                            <button class="btn text-sm text-white bg-purple-500 hover:bg-purple-600 w-full shadow-xs group" type="submit">
                                Send Message <span class="tracking-normal text-purple-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>

</main>

<?php get_footer(); ?>




