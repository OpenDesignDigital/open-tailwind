
<?= partial("_hero_blog"); ?>


<section class="featured-post">
    <div class="container mx-auto py-16">
    <?php
          query_posts( array( 
          'post_type' => 'post', 
          'posts_per_page' => '1',
        ) );
          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
        
              <?php get_template_part( 'partials/_featured_post' ); ?>        
          
            <?php endwhile; endif; ?>

          <?php wp_reset_query(); ?>  
    </div>
</section>

<section class="blog-posts">
    <div class="container mx-auto pb-16">
        <div class="grid grd-cols-1 gap-12 md:grid-cols-3">
        <?php
            $current_page = get_query_var('paged');
            $current_page = max( 1, $current_page );

            $per_page = 6;
            $offset_start = 1;
            $offset = ( $current_page - 1 ) * $per_page + $offset_start;

            $post_list = new WP_Query(array(
              
                'posts_per_page' => $per_page,
                'paged'          => $current_page,
                'offset'         => $offset, // Starts with the second most recent post.
                'orderby'        => 'date',  // Makes sure the posts are sorted by date.
                'order'          => 'DESC',  // And that the most recent ones come first.
                //'category__not_in' => 35,
            ));

            // Manually count the number of pages, because we used a custom OFFSET (i.e.
            // other than 0), so we can't simply use $post_list->max_num_pages or even
            // $post_list->found_posts without extra work/calculation.
            $total_rows = max( 0, $post_list->found_posts - $offset_start );
            $total_pages = ceil( $total_rows / $per_page );

            if ( $post_list->have_posts() ):
              while ( $post_list->have_posts() ):
                  $post_list->the_post();?>

                <div class="col">
                    <?= partial('_post_card'); ?>

                </div>
              <?php    
              endwhile;?>

              <div class="pagination">
                <?php
                    echo paginate_links( array(
                        'total'   => $total_pages,
                        'current' => $current_page,
                    ) );
                  ?>
              </div>
          <?php    
          endif;
          wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?= partial('_content/_newsletter_block'); ?>


