<?php get_header();?>


<div class="container" pt-5 pb-5>

    <!-- getting the title dynamically from the dashboard -->
    <h1><?php the_title();?></h1>

    <!-- checking if there is any content in the body in the pages dashboard & add it dynamically -->
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content();?>
    <?php endwhile; endif; ?>

</div>


<?php get_footer();?>