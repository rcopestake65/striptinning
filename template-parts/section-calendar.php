<?php if(have_posts()): while(have_posts()): the_post();?>

<div class="page-container">

    <div class="sidebar-container">
        <div class="sidebar">
            <h2>Investors</h2>
            <?php get_template_part('template-parts/section', 'menu-sidebar');?>
        </div>

    </div>
    <div class="content">
        <div class="page-title-mobile">
            <h1><?php the_title();?></h1>
        </div>
        <?php if(has_post_thumbnail()):?>
        <div class="img-zoom"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"></div>

        <?php endif;?>
        <?php the_content();?>

        <div class="calendar-grid">
            <?php

// check if the repeater field has rows of data
if( have_rows('calendar') ):
 // loop through the rows of data
 while ( have_rows('calendar') ) : the_row();
?>
            <div class="calendar-item title">
                <?php      // display a sub field value
        the_sub_field('title');
        ?>

            </div>
            <div class="calendar-item date">
                <?php      // display a sub field value
        the_sub_field('date');
        ?>

            </div>

            <?php endwhile;

else :

    // no rows found


endif;
?>
        </div>
    </div>




    <?php endwhile; else: endif;?>