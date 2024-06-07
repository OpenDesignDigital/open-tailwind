<?php
/**
 * Template Name: Post Type Listings
 */
?>
<?= partial("_hero"); ?>
<div id="mainBody" class="flex flex-col">

<section class="listings py-16">
    <div class="container mx-auto">
    <?php
        $args1 = array (
            // Change post_type to the necessary CPT
            'post_type' => 'attractions',
            'posts_per_page' => '-1',
        );
        // First custom query.
        $query1 = new WP_Query( $args1 );        
        // Check that we have query results.
            if ( $query1->have_posts() ) {
                // Start looping over the query results.
                $i = 1;  while ( $query1->have_posts() ) {
                    $query1->the_post(); ?>
                    <?= partial("_content/_cpt-snippet"); ?>
                    
                    <?php $i++;
                    }
                }
                // Restore original post data.
                wp_reset_postdata();
            ?>
    </div>
</section>

<div class="flex flex-col">
<?= partial("_page_builder"); ?>
</div>


</div>
