<?php get_header();?>


<div class="container" pt-5 pb-5>

    <!-- getting the title dynamically from the dashboard -->
    <!-- <h1><?php single_cat_title();?></h1> -->

    <!-- checking if there is any content in the body in the pages dashboard & add it dynamically -->
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class= "card mb-4">
        <div class="card-body">
            <!-- check wheather or not the post has a thumbnail & display it -->
            <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('smallest');?>" class= "img-fluid">
            <?php endif; ?>

            <h3><?php the_title();?></h3>
            <?php the_excerpt();?>
            <a href="<?php the_permalink();?>" class= "btn btn-success">Read More</a>
        </div>
    </div>
    <?php endwhile; endif; ?>

</div>


<?php get_footer();?>