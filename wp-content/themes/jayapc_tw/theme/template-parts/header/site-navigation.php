<?php
/**
 * Site Navigation
 */
?>
<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Site Logo -->
            <div class="flex-shrink-0">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-bold">
                        <?php bloginfo('name'); ?>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Main Menu -->
            <div class="hidden md:block">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'flex space-x-4',
                    'container' => false,
                    'walker' => new Mega_Menu_Walker(),
                ));
                ?>
            </div>

            <!-- Search Button -->
            <div class="flex items-center">
                <button type="button" class="p-2 text-gray-600 hover:text-gray-900" id="search-toggle">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Search Form (Hidden by default) -->
        <div class="hidden" id="search-form">
            <form role="search" method="get" class="py-4" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="search" class="w-full px-4 py-2 border rounded-lg" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
            </form>
        </div>
    </div>
</nav>
