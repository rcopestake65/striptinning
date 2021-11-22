<header>
    <nav>
        <div class="nav-header">
            <div class="logo">
                <a href="<?php echo get_bloginfo('url') . '/'; ?>"><img
                        src="<?php bloginfo('template_url') ?>/img/strip-tinning.png" alt="Strip Tinning Logo"></a>
                <?php if (!is_front_page()) : echo '<div class="go-home"></div>'; endif;
                ?>

            </div>

            <?php if (is_front_page()) : ?>
            <div class="hero">
                <h2>Banner text goes here</h2>
                <div class="hero-btn"> <button><a href="#">Find out more <i class="fas fa-arrow-right"></i></a></button>
                </div>

            </div>
            <?php elseif (is_post_type_archive('directors') ): ?>
            <div class="page-title">
                <h1>Board of Directors</h1>
            </div>
            <?php elseif (!is_post_type_archive('directors') ): ?>
            <div class="page-title">
                <h1><?php the_title(); ?></h1>
            </div>


            <?php endif;  ?>
            <div class="menu-container">
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times hide"></i>
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