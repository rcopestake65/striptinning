<header>
    <nav>
        <div class="nav-header">
            <div class="logo">
                <a href="<?php echo get_bloginfo('url').'/'; ?>"><img
                        src="<?php bloginfo('template_url') ?>/img/strip-tinning.png" alt="Strip Tinning Logo"></a>
                <div class="go-home">

                </div>
            </div>
            <div class="page-title">
                <h1>Board of Directors</h1>

            </div>
            <div class="menu-container">
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                </button>

            </div>
        </div>
        <div class="mobile-menu-container">

            <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'mobile-menu',
                    )
                );
            ?>
        </div>

    </nav>

</header>