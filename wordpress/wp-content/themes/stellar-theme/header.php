<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-inter antialiased bg-slate-900 text-slate-100 tracking-tight'); ?>>
<?php wp_body_open(); ?>

<!-- Page wrapper -->
<div class="flex flex-col min-h-screen overflow-hidden supports-[overflow:clip]:overflow-clip">

    <!-- Site header -->
    <header class="absolute w-full z-30">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="flex items-center justify-between h-16 md:h-20">

                <!-- Site branding -->
                <div class="flex-1">
                    <?php if (has_custom_logo()) : ?>
                        <div class="site-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <a class="inline-flex" href="<?php echo esc_url(home_url('/home')); ?>" aria-label="<?php bloginfo('name'); ?>">
                            <img class="max-w-none" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.svg" width="38" height="38" alt="<?php bloginfo('name'); ?>">
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Desktop navigation -->
                <nav class="hidden md:flex md:grow">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'flex grow justify-center flex-wrap items-center',
                        'container' => false,
                        'fallback_cb' => 'stellar_fallback_menu',
                    ));
                    ?>
                </nav>

                <!-- Desktop sign in links -->
                <ul class="flex-1 flex justify-end items-center">
                    <li>
                        <a class="font-medium text-sm text-slate-300 hover:text-white whitespace-nowrap transition duration-150 ease-in-out" href="<?php echo esc_url(home_url('/signin')); ?>">Sign in</a>
                    </li>
                    <li class="ml-6">
                        <a class="btn-sm text-slate-300 hover:text-white transition duration-150 ease-in-out w-full group [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] relative before:absolute before:inset-0 before:bg-slate-800/30 before:rounded-full before:pointer-events-none" href="<?php echo esc_url(home_url('/signup')); ?>">
                            <span class="relative inline-flex items-center">
                                Sign up <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                            </span>
                        </a>
                    </li>
                </ul>
                
                <!-- Mobile menu -->
                <div class="md:hidden flex items-center ml-4" x-data="{ expanded: false }">
                
                    <!-- Hamburger button -->
                    <button class="group inline-flex w-8 h-8 text-slate-300 hover:text-white text-center items-center justify-center transition" aria-controls="mobile-nav" :aria-expanded="expanded" @click.stop="expanded = !expanded">
                        <span class="sr-only"><?php esc_html_e('Menu', 'stellar'); ?></span>
                        <svg class="w-4 h-4 fill-current pointer-events-none" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <rect class="origin-center transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] -translate-y-[5px] group-aria-expanded:rotate-[315deg] group-aria-expanded:translate-y-0" y="7" width="16" height="2" rx="1"></rect>
                            <rect class="origin-center group-aria-expanded:rotate-45 transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.8)]" y="7" width="16" height="2" rx="1"></rect>
                            <rect class="origin-center transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] translate-y-[5px] group-aria-expanded:rotate-[135deg] group-aria-expanded:translate-y-0" y="7" width="16" height="2" rx="1"></rect>
                        </svg>
                    </button>                             
                
                    <!-- Mobile navigation -->
                    <nav id="mobile-nav" class="absolute top-full z-20 left-0 w-full px-4 sm:px-6 overflow-hidden transition-all duration-300 ease-in-out" x-ref="mobileNav" :style="expanded ? 'max-height: ' + $refs.mobileNav.scrollHeight + 'px; opacity: 1' : 'max-height: 0; opacity: .8'" @click.outside="expanded = false" @keydown.escape.window="expanded = false" x-cloak>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'mobile',
                            'menu_class' => 'border border-transparent [background:linear-gradient(var(--color-slate-900),var(--color-slate-900))_padding-box,conic-gradient(var(--color-slate-400),var(--color-slate-700)_25%,var(--color-slate-700)_75%,var(--color-slate-400)_100%)_border-box] rounded-lg px-4 py-1.5',
                            'container' => false,
                            'fallback_cb' => 'stellar_fallback_menu',
                        ));
                        ?>
                    </nav>
                
                </div>

            </div>
        </div>
    </header>

    <!-- Page content -->
    <main class="grow">
