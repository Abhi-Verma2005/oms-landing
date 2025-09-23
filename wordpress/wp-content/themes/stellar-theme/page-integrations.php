<?php
/**
 * Template Name: Integrations Page
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
                    <div class="inline-flex font-medium bg-clip-text text-transparent bg-linear-to-r from-purple-500 to-purple-200 pb-3">Connect everything</div>
                    <h1 class="h1 bg-clip-text text-transparent bg-linear-to-r from-slate-200/60 via-slate-200 to-slate-200/60 pb-4">Integrations that work</h1>
                    <div class="max-w-3xl mx-auto">
                        <p class="text-lg text-slate-400">Connect Stellar with your favorite tools and services. We support 100+ integrations to streamline your workflow.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Integrations Grid -->
    <section class="relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="py-12 md:py-20">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    $integrations = array(
                        array('name' => 'Slack', 'description' => 'Team communication and collaboration'),
                        array('name' => 'GitHub', 'description' => 'Code repository and version control'),
                        array('name' => 'Jira', 'description' => 'Project management and issue tracking'),
                        array('name' => 'Google Workspace', 'description' => 'Productivity and collaboration suite'),
                        array('name' => 'Microsoft 365', 'description' => 'Office productivity and cloud services'),
                        array('name' => 'Salesforce', 'description' => 'Customer relationship management'),
                        array('name' => 'AWS', 'description' => 'Cloud computing and infrastructure'),
                        array('name' => 'Azure', 'description' => 'Microsoft cloud platform'),
                        array('name' => 'Docker', 'description' => 'Containerization platform'),
                    );
                    
                    foreach ($integrations as $integration) :
                    ?>
                    <div class="relative p-6 before:absolute before:inset-0 before:-z-10 before:border before:border-slate-300 before:bg-slate-700 before:opacity-10 before:rounded-xl hover:before:opacity-20 transition-opacity">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-700 rounded-xl flex items-center justify-center mx-auto mb-4">
                                <span class="text-2xl font-bold text-purple-500"><?php echo substr($integration['name'], 0, 1); ?></span>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-100 mb-2"><?php echo esc_html($integration['name']); ?></h3>
                            <p class="text-slate-400 text-sm"><?php echo esc_html($integration['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
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
                            <h2 class="h2 text-white mb-4">Need a custom integration?</h2>
                            <p class="text-lg text-purple-100 mb-8">We can build custom integrations for your specific needs. Contact our team to discuss your requirements.</p>
                            <a class="btn text-white bg-white hover:bg-gray-100 shadow-lg group" href="<?php echo esc_url(home_url('/contact/')); ?>">
                                Contact us <span class="tracking-normal text-slate-500 group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1">-&gt;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
