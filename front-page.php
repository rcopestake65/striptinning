<?php get_header('home');?>

<h1><?php the_title();?></h1>



<?php get_template_part('template-parts/section', 'content');?>
<?php get_template_part('template-parts/section', 'menu-sidebar');?>

<?php get_footer();?>