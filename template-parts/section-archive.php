<div class="page-container">

    <div class="sidebar-container">
        <div class="sidebar">
            <h2>Investors</h2>
            <?php get_template_part('template-parts/section', 'menu-sidebar');?>
        </div>

    </div>
    <div class="content">
        <div class="page-title-mobile">

        </div>
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <h1><?php the_title();?></h1>
        <?php the_content();?>
        <?php endwhile; else: endif;?>
    </div>

</div>