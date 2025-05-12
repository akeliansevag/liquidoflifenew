<div id="mobile-menu-overlay" class="bg-black bg-opacity-70 fixed top-0 left-0 w-full h-full -z-10 opacity-0 transition-opacity duration-300"></div>
<div id="mobile-menu-content" class="overflow-y-auto fixed top-0 left-0 w-full max-w-[400px] h-full bg-white z-50 transition-transform duration-300 -translate-x-full">
    <div id="menu-close-btn" class="cursor-pointer justify-self-end p-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="25px" height="25px">
            <path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z" />
        </svg>
    </div>
    <div>
        <div>
            <?php
            wp_nav_menu([
                'menu' => 'main-menu',
                'menu_class' => 'mobile-menu',
                'container' => false
            ]);
            ?>
        </div>

    </div>
</div>