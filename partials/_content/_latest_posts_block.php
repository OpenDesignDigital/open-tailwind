<?php
$section_heading = get_sub_field('section_heading');
$section_subtitle = get_sub_field('section_subheading');
$how_many_posts_to_show = get_sub_field('how_many_posts_to_show');
$which_post_type_to_show = get_sub_field('which_post_type_to_show');

// NEED to do a query for the correct posts and feed in whatever stuff get's passed in from the ACF fields

$arguments = array(
    'numberposts' => $how_many_posts_to_show,
    'post_type' => $which_post_type_to_show,
    'order' => "DESC",
    'post__not_in' => array(get_the_id()), // exclude the current page
    'meta_query'    => array(
        array(
            // 'key'          => 'featured_project',
            // 'value'          => '1',
            // 'compare'     => '=',
        ),
    ),
);
$taggedLatestPosts = get_posts($arguments);

?>

<section id="latest_posts_block" class="js-show-on-scroll">
    <div class="container mx-auto py-16">
        

        
        <?php
        if ($section_heading) {
        ?>
        <div class="section-title">
            <h2 class="text-4xl text-center mb-16"><?php echo $section_heading; ?></h2>
        </div>    
        <?php
        }
        ?>
        
        <?php
        if ($section_subtitle) {
        ?>
            <h5><?php echo $section_subtitle; ?></h5>
        <?php
        }
        ?>


        <div class="grid grd-cols-1 gap-12 md:grid-cols-3">
            <?php

            foreach ($taggedLatestPosts as $taggedPost) {
            ?>
                <div class="col">
                    <?php
                    $taggedPostId = $taggedPost->ID;

                    // echo $postId;
                    // Prob output the card here
                    echo blog_post_card($taggedPostId);
                    ?>

                </div>
            <?php
            }

            ?>
        </div>

        <div class="flex justify-center items-center text-center mt-20">
                <a href="/blog/" class="btn-link dark">More Articles</a>
            </div>


    </div>
</section>


<?php
/*
<div class="latest_posts_block">
    <div class="wrapper">
        <?php
        if ($section_heading) {
        ?>
            <h1><?php echo $section_heading; ?></h1>
        <?php
        }
        ?>


        <ol class="posts-listing">
            <?php
            foreach ($taggedLatestPosts as $post) {
            ?>
                <li>
                    <?php
                    $postId = $post->ID;

                    // echo $postId;
                    // Prob output the card here
                    // echo blog_post_card($postId);
                    ?>

                </li>
            <?php
            }
            ?>
        </ol>

        <?php
        // If there are CTAs here, display them
        // This will pull in any available ctas automagically!
        // get_template_part('content-parts/ctas_block');
        ?>


    </div>
</div>
*/
?>