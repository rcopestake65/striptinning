<div class="page-container">

    <?php get_template_part('template-parts/section', 'menu-sidebar');?>
    <div class="content">
        <div class="page-title-mobile">

        </div>
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <h1><?php the_title();?></h1>
        <?php the_content();?>
        <?php endwhile; else: endif;?>
    </div>

</div>