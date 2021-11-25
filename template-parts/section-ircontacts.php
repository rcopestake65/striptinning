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

        <div class="contacts-grid">
            <?php

// check if the repeater field has rows of data
if( have_rows('contacts') ):
 // loop through the rows of data
 while ( have_rows('contacts') ) : the_row();
?>
            <div class="contacts-item">
                <?php      // display  sub field values
        ?>

                <h3><?php the_sub_field('title'); ?></h3>
                <p><?php the_sub_field('address_line_1'); ?></p>
                <p><?php the_sub_field('address_line_2'); ?></p>
                <p><?php the_sub_field('town_city'); ?></p>
                <p><?php the_sub_field('postcode'); ?></p>
                <p><a href="mailto<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></p>
                <p><?php the_sub_field('phone'); ?></p>



            </div>


            <?php endwhile;

else :

    // no rows found


endif;
?>
        </div>
    </div>




    <?php endwhile; else: endif;?>