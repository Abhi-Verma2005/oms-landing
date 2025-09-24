<?php
/**
 * Template Name: Changelog Page
 * 
 * @package StellarTheme
 */

get_header(); ?>

<main class="grow">

    <!-- Hero -->
    <section class="relative">
        <div class="absolute flex items-center justify-center top-0 -translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-[800px] aspect-square" aria-hidden="true">
            <div class="absolute inset-0 translate-z-0 bg-purple-500 rounded-full blur-[120px] opacity-30"></div>
            <div class="absolute w-64 h-64 translate-z-0 bg-purple-400 rounded-full blur-[80px] opacity-70"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-20 md:pt-40 md:pb-24">
                <div class="text-center pb-12 md:pb-20">
                    <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">What's new</div>
                    <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Changelog</h1>
                    <div class="max-w-3xl mx-auto">
                        <p class="text-lg text-slate-400">Stay up to date with the latest features, improvements, and fixes we're shipping to Stellar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Changelog -->
    <section class="relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">
                <div class="space-y-8">
                    <!-- Version 2.1.0 -->
                    <div class="relative pl-8 before:absolute before:left-0 before:top-0 before:bottom-0 before:w-px before:bg-slate-800">
                        <div class="relative">
                            <div class="absolute -left-8 top-0 w-6 h-6 bg-purple-500 rounded-full border-4 border-slate-900"></div>
                            <div class="flex items-center mb-4">
                                <h3 class="text-xl font-bold text-slate-100">Version 2.1.0</h3>
                                <span class="ml-3 px-2 py-1 text-xs font-medium bg-purple-500/20 text-purple-400 rounded-full">Latest</span>
                                <span class="ml-auto text-sm text-slate-500">December 15, 2024</span>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-200 mb-2">✨ New Features</h4>
                                    <ul class="space-y-2 text-sm text-slate-400">
                                        <li class="flex items-start">
                                            <span class="text-green-500 mr-2">+</span>
                                            <span>Added support for OAuth 2.0 with PKCE flow</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-green-500 mr-2">+</span>
                                            <span>New admin dashboard with advanced analytics</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-green-500 mr-2">+</span>
                                            <span>Custom email templates for user notifications</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-200 mb-2">🐛 Bug Fixes</h4>
                                    <ul class="space-y-2 text-sm text-slate-400">
                                        <li class="flex items-start">
                                            <span class="text-blue-500 mr-2">•</span>
                                            <span>Fixed session timeout issues in Safari</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-blue-500 mr-2">•</span>
                                            <span>Resolved memory leak in long-running processes</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Version 2.0.5 -->
                    <div class="relative pl-8 before:absolute before:left-0 before:top-0 before:bottom-0 before:w-px before:bg-slate-800">
                        <div class="relative">
                            <div class="absolute -left-8 top-0 w-6 h-6 bg-slate-600 rounded-full border-4 border-slate-900"></div>
                            <div class="flex items-center mb-4">
                                <h3 class="text-xl font-bold text-slate-100">Version 2.0.5</h3>
                                <span class="ml-auto text-sm text-slate-500">December 1, 2024</span>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-200 mb-2">🔧 Improvements</h4>
                                    <ul class="space-y-2 text-sm text-slate-400">
                                        <li class="flex items-start">
                                            <span class="text-yellow-500 mr-2">~</span>
                                            <span>Improved performance for large user bases</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-yellow-500 mr-2">~</span>
                                            <span>Enhanced security logging and monitoring</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-200 mb-2">🐛 Bug Fixes</h4>
                                    <ul class="space-y-2 text-sm text-slate-400">
                                        <li class="flex items-start">
                                            <span class="text-blue-500 mr-2">•</span>
                                            <span>Fixed password reset email delivery issues</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Version 2.0.0 -->
                    <div class="relative pl-8 before:absolute before:left-0 before:top-0 before:bottom-0 before:w-px before:bg-slate-800">
                        <div class="relative">
                            <div class="absolute -left-8 top-0 w-6 h-6 bg-slate-600 rounded-full border-4 border-slate-900"></div>
                            <div class="flex items-center mb-4">
                                <h3 class="text-xl font-bold text-slate-100">Version 2.0.0</h3>
                                <span class="ml-3 px-2 py-1 text-xs font-medium bg-orange-500/20 text-orange-400 rounded-full">Major</span>
                                <span class="ml-auto text-sm text-slate-500">November 15, 2024</span>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-200 mb-2">🚀 Major Changes</h4>
                                    <ul class="space-y-2 text-sm text-slate-400">
                                        <li class="flex items-start">
                                            <span class="text-red-500 mr-2">!</span>
                                            <span>Complete UI redesign with modern interface</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-red-500 mr-2">!</span>
                                            <span>New API v2 with improved performance</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-red-500 mr-2">!</span>
                                            <span>Multi-tenant architecture support</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-slate-200 mb-2">✨ New Features</h4>
                                    <ul class="space-y-2 text-sm text-slate-400">
                                        <li class="flex items-start">
                                            <span class="text-green-500 mr-2">+</span>
                                            <span>Advanced role-based access control (RBAC)</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-green-500 mr-2">+</span>
                                            <span>Real-time security monitoring dashboard</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-green-500 mr-2">+</span>
                                            <span>Support for 50+ new integrations</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <h2 class="h2 text-white mb-4">Stay updated</h2>
                            <p class="text-lg text-purple-100 mb-8">Subscribe to our newsletter to get notified about new releases and updates.</p>
                            <a class="btn text-white bg-white hover:bg-gray-100 shadow-lg group" href="<?php echo esc_url(home_url('/signup')); ?>">
                                Subscribe <span class="tracking-normal text-slate-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
