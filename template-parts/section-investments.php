<?php if(have_posts()): while(have_posts()): the_post();?>

<div class="page-container">

<?php get_template_part('template-parts/section', 'menu-sidebar');?>
    <div class="content">
        <div class="page-title-mobile">
            <h1><?php the_title();?></h1>
        </div>
        <?php if(has_post_thumbnail()):?>
        <div class="img-zoom"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"></div>

        <?php endif;?>
        <?php the_content();?>


    </div>
</div>
</div>
<!--close .container started in header.php to allow content below to run full-width. Then open .container again to be closed in footer-->

<div class="full-width">
    <div class="container">

        <h2 class="investment-cases">6 reasons to invest in Strip Tinning</h2>
        <div class="grid">
            <?php

// check if the repeater field has rows of data
if( have_rows('investment_case') ):
 // loop through the rows of data
 while ( have_rows('investment_case') ) : the_row();
?>

            <div class="case-item">
                <?php      // display  sub field values

                    $img = get_sub_field('icon');
                ?>

                <img src="<?php echo $img; ?>" alt="" />
                <p><?php the_sub_field('reason'); ?></p>
            </div>


            <?php endwhile;

else :

    // no rows found


endif;
?>
        </div>

    </div>
    <div class="container">

        <?php endwhile; else: endif;?>