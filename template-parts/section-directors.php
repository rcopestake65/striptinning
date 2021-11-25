<div class="page-container">

    <div class="sidebar-container">
        <div class="sidebar">
            <h2>Investors</h2>
            <?php get_template_part('template-parts/section', 'menu-sidebar');?>
        </div>

    </div>
    <div class="content">


        <div class="board-grid">
            <?php if(have_posts()): while(have_posts()): the_post();?>
            <div class="board-grid-item">
                <?php if(has_post_thumbnail()):?>
                <a href="<?php the_permalink ();?>">
                    <div class="img-zoom"><img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                    </div>
                </a>

                <?php endif;?>

                <h2 class="xxxxxxxxxxxxxxxx"> <a href="<?php the_permalink ();?>"><?php the_title();?></a></h2>

                <?php the_excerpt();?>

            </div>
            <?php endwhile; else: endif;?>
        </div>



    </div>
</div>