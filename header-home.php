<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Strip Tinning | <?php the_title();?></title>

    <?php wp_head();?>
</head>

<body <?php body_class($post->post_type . '-' . $post->post_name); ?>>
    <div class="container">
        <header>
            <nav>
                <div class="nav-header">
                    <div class="logo">
                        <img src="<?php bloginfo('template_url') ?>/img/strip-tinning.png" alt="Strip Tinning Logo">

                    </div>
                    <div class="hero">
                        <h2>Banner text goes here</h2>
                        <button>Find out more <i class="fas fa-arrow-right"></i></button>
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