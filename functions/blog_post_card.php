<?php
// Echos out a nice card to display a blog post
// Pass in postId 


// eg:
// echo blog_post_card($postId);



function blog_post_card($postId)
{
    // Get Buttons
    // $arguments = func_get_args();
    // var_dump($arguments[0]);

    $title = get_the_title($postId);
    $excerpt = wp_trim_words( get_the_excerpt(($postId)), $num_words = 18, $more = '...' );
    $link = get_the_permalink($postId);
    $imageId = get_post_thumbnail_id($postId) ? get_post_thumbnail_id($postId) : "48"; // If none, default to media item 331 (grey square)

    ob_start();
?>

    <article class="flex flex-col space-y-4">
        <a class="flex flex-col space-y-4" href="<?php echo $link ?>">
           
            
                    <?php
                    $size = 'post-thumbs'; // (post-thumbs, thumbnail, medium, large, full .etc)
                    // (full is good here as the function outputs a srcset)
                    echo wp_get_attachment_image($imageId, $size, "", ["class" => "mb-2"]);
                    ?>
            
            

            <h3 class="text-3xl px-8 md:px-0"><?php echo $title; ?></h3>

            <div class="text-lg the-content pr-16 px-8 md:px-0">
                

                <p><?php echo $excerpt; ?></p>

            </div>

            <div class="btn-txt mx-8 md:mx-0">Read more</div>
        </a>
    </article>
   

<?php
    return ob_get_clean();
}
?>