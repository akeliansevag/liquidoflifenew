<header class="bg-transparent fixed z-30 top-0 left-0 lg:h-[var(--header-height)] w-full max-lg:h-[var(--mobile-header-height)]">
    <div class="container h-full flex items-center justify-between">
        <div>
            <a href="<?= home_url() ?>">
                <img class="max-lg:w-[200px]" src="<?= get_template_directory_uri() ?>/src/img/logo2.webp" alt="Logo" width="282">
            </a>
        </div>
        <div>
            <div class="menu-wrapper max-lg:hidden bg-[#FFFFFF]/40 px-10 h-[50px] justify-center items-center flex font-bold rounded-xl">
                <?php
                wp_nav_menu([
                    'menu' => 'main-menu',
                    'menu_class' => 'flex items-center gap-10',
                    'container' => ''
                ]);
                ?>
            </div>
            <div id="burger-btn" class="lg:hidden cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
                    <path d="M 5 8 A 2.0002 2.0002 0 1 0 5 12 L 45 12 A 2.0002 2.0002 0 1 0 45 8 L 5 8 z M 5 23 A 2.0002 2.0002 0 1 0 5 27 L 45 27 A 2.0002 2.0002 0 1 0 45 23 L 5 23 z M 5 38 A 2.0002 2.0002 0 1 0 5 42 L 45 42 A 2.0002 2.0002 0 1 0 45 38 L 5 38 z"></path>
                </svg>
            </div>
        </div>

    </div>
</header>