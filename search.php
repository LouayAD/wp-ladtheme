<?php get_header();?>


<div class="container" pt-5 pb-5>

    <!-- getting the title dynamically from the dashboard -->
    <h1>Search Results:</h1>

    <!-- we show the search results here | under-development -->
    <h2><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>
    

</div>


<?php get_footer();?>