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
        <?php get_template_part('template-parts/section', 'headerDirectors');?>