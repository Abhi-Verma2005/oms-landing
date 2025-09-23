<?php
/**
 * Template Name: Pricing Page
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
            <div class="pt-32 pb-20 md:pt-40 md:pb-24">

                <!-- Section header -->
                <div class="text-center pb-12 md:pb-20">
                    <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">The security first platform</div>
                    <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Simple plans for everyone</h1>
                    <div class="max-w-3xl mx-auto">
                        <p class="text-lg text-slate-400">Cut down overhead costs and ditch clunky software. Get a flexible, purpose-built tool to simplify your security with authentication services.</p>
                    </div>
                </div>

                <!-- Pricing tabs -->
                <div class="relative">
                    <!-- Blurred shape -->
                    <div class="max-md:hidden absolute bottom-0 -mb-20 left-2/3 -translate-x-1/2 blur-2xl opacity-70 pointer-events-none" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="434" height="427">
                            <defs>
                                <linearGradient id="bs5-a" x1="19.609%" x2="50%" y1="14.544%" y2="100%">
                                    <stop offset="0%" stop-color="#A855F7" />
                                    <stop offset="100%" stop-color="#6366F1" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#bs5-a)" fill-rule="evenodd" d="m661 736 461 369-284 58z" transform="matrix(1 0 0 -1 -661 1163)" />
                        </svg>
                    </div>
                    <!-- Content -->
                    <div class="grid md:grid-cols-4 xl:-mx-6 text-sm [&>div:nth-of-type(-n+4)]:py-6 [&>div:nth-last-of-type(-n+4)]:pb-6 max-md:[&>div:nth-last-of-type(-n+4)]:mb-8 max-md:[&>div:nth-of-type(-n+4):nth-of-type(n+1)]:rounded-t-3xl max-md:[&>div:nth-last-of-type(-n+4)]:rounded-b-3xl md:[&>div:nth-of-type(2)]:rounded-tl-3xl md:[&>div:nth-of-type(4)]:rounded-tr-3xl md:[&>div:nth-last-of-type(3)]:rounded-bl-3xl md:[&>div:nth-last-of-type(1)]:rounded-br-3xl [&>div]:bg-slate-700/20 [&>div:nth-of-type(4n+1)]:bg-transparent max-md:[&>div:nth-of-type(4n+5)]:hidden max-md:[&>div:nth-of-type(4n+2)]:order-1 max-md:[&>div:nth-of-type(4n+3)]:order-2 max-md:[&>div:nth-of-type(4n+4)]:order-3 max-md:md:[&>div:nth-of-type(n)]:mb-0 [&>div:nth-of-type(4n+3)]:relative [&>div:nth-of-type(4n+3)]:before:absolute [&>div:nth-of-type(4n+3)]:before:-inset-px [&>div:nth-of-type(4n+3)]:before:rounded-[inherit] [&>div:nth-of-type(4n+3)]:before:border-x-2 [&>div:nth-of-type(3)]:before:border-t-2 [&>div:nth-last-of-type(2)]:before:border-b-2 [&>div:nth-of-type(4n+3)]:before:border-purple-500 [&>div:nth-of-type(4n+3)]:before:-z-10 [&>div:nth-of-type(4n+3)]:before:pointer-events-none" x-data="{ annual: true }">
                        <!-- Pricing toggle -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="pb-5 md:border-b border-slate-800">
                                <!-- Toggle switch -->
                                <div class="max-md:text-center">
                                    <div class="inline-flex items-center whitespace-nowrap">
                                        <div class="text-sm text-slate-500 font-medium mr-2 md:max-lg:hidden">Monthly</div>
                                        <div class="relative">
                                            <input type="checkbox" id="toggle" class="peer sr-only" x-model="annual" />
                                            <label for="toggle" class="relative flex h-6 w-11 cursor-pointer items-center rounded-full bg-slate-400 px-0.5 outline-slate-400 transition-colors before:h-5 before:w-5 before:rounded-full before:bg-white before:shadow-xs before:transition-transform before:duration-150 peer-checked:bg-purple-500 peer-checked:before:translate-x-full peer-focus-visible:outline peer-focus-visible:outline-offset-2 peer-focus-visible:outline-gray-400 peer-focus-visible:peer-checked:outline-purple-500">
                                                <span class="sr-only">Pay Yearly</span>
                                            </label>
                                        </div>
                                        <div class="text-sm text-slate-500 font-medium ml-2">Yearly <span class="text-teal-500">(-20%)</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pro price -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="grow pb-4 mb-4 border-b border-slate-800">
                                <div class="text-base font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-0.5">Pro</div>
                                <div class="mb-1">
                                    <span class="text-lg font-medium text-slate-500">$</span><span class="text-3xl font-bold text-slate-50" x-text="annual ? '24' : '29'">24</span><span class="text-sm text-slate-600 font-medium">/mo</span>
                                </div>
                                <div class="text-slate-500">Everything at your fingertips.</div>
                            </div>
                            <div class="pb-4 border-b border-slate-800">
                                <a class="btn-sm text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="<?php echo esc_url(wp_registration_url()); ?>">
                                    Get Started <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                </a>
                            </div>
                        </div>
                        <!-- Team price -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="grow pb-4 mb-4 border-b border-slate-800">
                                <div class="text-base font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-0.5">Team</div>
                                <div class="mb-1">
                                    <span class="text-lg font-medium text-slate-500">$</span><span class="text-3xl font-bold text-slate-50" x-text="annual ? '49' : '54'">49</span><span class="text-sm text-slate-600 font-medium">/mo</span>
                                </div>
                                <div class="text-slate-500">Everything at your fingertips.</div>
                            </div>
                            <div class="pb-4 border-b border-slate-800">
                                <a class="btn-sm text-white bg-purple-500 hover:bg-purple-600 w-full transition duration-150 ease-in-out group" href="<?php echo esc_url(wp_registration_url()); ?>">
                                    Get Started <span class="tracking-normal text-purple-300 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                </a>
                            </div>
                        </div>
                        <!-- Enterprise price -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="grow pb-4 mb-4 border-b border-slate-800">
                                <div class="text-base font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-0.5">Enterprise</div>
                                <div class="mb-1">
                                    <span class="text-lg font-medium text-slate-500">$</span><span class="text-3xl font-bold text-slate-50" x-text="annual ? '79' : '85'">79</span><span class="text-sm text-slate-600 font-medium">/mo</span>
                                </div>
                                <div class="text-slate-500">Everything at your fingertips.</div>
                            </div>
                            <div class="pb-4 border-b border-slate-800">
                                <a class="btn-sm text-slate-900 bg-linear-to-r from-white/80 via-white to-white/80 hover:bg-white w-full transition duration-150 ease-in-out group" href="<?php echo esc_url(wp_registration_url()); ?>">
                                    Get Started <span class="tracking-normal text-purple-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                                </a>
                            </div>
                        </div>
                        <!-- # Usage -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4">Usage</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Usage</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Usage</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Usage</div>
                        </div>
                        <!-- Social Connections -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Social Connections</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>100 <span class="md:hidden">Social Connections</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>250 <span class="md:hidden">Social Connections</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">Social Connections</span></span>
                            </div>
                        </div>
                        <!-- Custom Domains -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Custom Domains</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>4 <span class="md:hidden">Custom Domains</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">Custom Domains</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">Custom Domains</span></span>
                            </div>
                        </div>
                        <!-- User Role Management -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">User Role Management</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">User Role Management</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">User Role Management</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">User Role Management</span></span>
                            </div>
                        </div>
                        <!-- External Databases -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">External Databases</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>1 <span class="md:hidden">External Databases</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>5 <span class="md:hidden">External Databases</span></span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Unlimited <span class="md:hidden">External Databases</span></span>
                            </div>
                        </div>
                        <!-- # Features -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4">Features</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Features</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Features</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-50 font-medium mt-4 md:hidden">Features</div>
                        </div>
                        <!-- Advanced Analytics -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Advanced Analytics</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Advanced Analytics</span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Advanced Analytics</span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Advanced Analytics</span>
                            </div>
                        </div>
                        <!-- Priority Support -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">Priority Support</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-slate-600 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Priority Support</span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Priority Support</span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>Priority Support</span>
                            </div>
                        </div>
                        <!-- API Access -->
                        <div class="px-6 flex flex-col justify-end">
                            <div class="py-2 text-slate-400 border-b border-slate-800">API Access</div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>API Access</span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>API Access</span>
                            </div>
                        </div>
                        <div class="px-6 flex flex-col justify-end">
                            <div class="flex items-center h-full border-b border-slate-800 py-2 text-slate-400">
                                <svg class="shrink-0 fill-purple-500 mr-3" xmlns="http://www.w3.org/2000/svg" width="12" height="9">
                                    <path d="M10.28.28 3.989 6.575 1.695 4.28A1 1 0 0 0 .28 5.695l3 3a1 1 0 0 0 1.414 0l7-7A1 1 0 0 0 10.28.28Z" />
                                </svg>
                                <span>API Access</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- FAQ -->
    <section class="relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">
                <!-- Content -->
                <div class="max-w-3xl mx-auto text-center pb-12 md:pb-20">
                    <h2 class="h2 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Frequently asked questions</h2>
                    <p class="text-lg text-slate-400">Here are some of the questions we get the most. If you don't see what's on your mind, reach out to us anytime.</p>
                </div>
                <!-- FAQ items -->
                <div class="max-w-3xl mx-auto">
                    <div class="space-y-4">
                        <div class="group" x-data="{ expanded: false }">
                            <button class="flex w-full items-center justify-between py-4 text-left" @click="expanded = !expanded">
                                <span class="text-slate-50 font-medium">What's included in the free plan?</span>
                                <svg class="ml-2 h-4 w-4 shrink-0 fill-current text-slate-400 transition-transform duration-200 group-hover:text-slate-300" :class="expanded ? 'rotate-180' : ''">
                                    <path d="M7.14 12.59l-4.95-4.95A1 1 0 0 1 3.05 6.05L8 11l4.95-4.95a1 1 0 0 1 1.86.54v10a1 1 0 0 1-1.86.54L7.14 12.59z" />
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-200" x-show="expanded" x-collapse>
                                <div class="pb-4 text-slate-400">
                                    <p>The free plan includes basic authentication features, up to 100 social connections, 4 custom domains, and standard support. It's perfect for getting started with our platform.</p>
                                </div>
                            </div>
                        </div>
                        <div class="group" x-data="{ expanded: false }">
                            <button class="flex w-full items-center justify-between py-4 text-left" @click="expanded = !expanded">
                                <span class="text-slate-50 font-medium">Can I change plans anytime?</span>
                                <svg class="ml-2 h-4 w-4 shrink-0 fill-current text-slate-400 transition-transform duration-200 group-hover:text-slate-300" :class="expanded ? 'rotate-180' : ''">
                                    <path d="M7.14 12.59l-4.95-4.95A1 1 0 0 1 3.05 6.05L8 11l4.95-4.95a1 1 0 0 1 1.86.54v10a1 1 0 0 1-1.86.54L7.14 12.59z" />
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-200" x-show="expanded" x-collapse>
                                <div class="pb-4 text-slate-400">
                                    <p>Yes, you can upgrade or downgrade your plan at any time. Changes take effect immediately, and we'll prorate any billing differences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="group" x-data="{ expanded: false }">
                            <button class="flex w-full items-center justify-between py-4 text-left" @click="expanded = !expanded">
                                <span class="text-slate-50 font-medium">What payment methods do you accept?</span>
                                <svg class="ml-2 h-4 w-4 shrink-0 fill-current text-slate-400 transition-transform duration-200 group-hover:text-slate-300" :class="expanded ? 'rotate-180' : ''">
                                    <path d="M7.14 12.59l-4.95-4.95A1 1 0 0 1 3.05 6.05L8 11l4.95-4.95a1 1 0 0 1 1.86.54v10a1 1 0 0 1-1.86.54L7.14 12.59z" />
                                </svg>
                            </button>
                            <div class="overflow-hidden transition-all duration-200" x-show="expanded" x-collapse>
                                <div class="pb-4 text-slate-400">
                                    <p>We accept all major credit cards, PayPal, and bank transfers for annual plans. All payments are processed securely through our payment partners.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
