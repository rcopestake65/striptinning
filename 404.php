<?php get_header();?>



<div class="page-container">
    <?php get_template_part('template-parts/section', 'menu-sidebar');?>


    <div class="content">
        <div class="page-title-mobile">

            <h1><?php the_title();?></h1>


        </div>
        <?php if(has_post_thumbnail()):?>
        <div class="img-zoom"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"></div>

        <?php endif;?>
        <h1>Oops something seems to have gone wrong</h1>
        <p>The page you are looking for is not available</p>
    </div>

</div>


<?php get_footer();?>