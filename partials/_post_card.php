<article class="flex flex-col space-y-4">
    <a class="flex flex-col space-y-4" href="<?php the_permalink(); ?>">
        <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail("post-thumbs");
            }
        ?>
        <h3 class="text-3xl px-10 md:px-0"><?php the_title(); ?></h3>
        <div class="text-lg the-content pr-16 px-10 md:px-0">
            <p><?php echo $excerpt = wp_trim_words(get_the_content(), $num_words = 15, $more = '...'); ?></p>
        </div>
        <div class="btn-txt mx-10 md:mx-0">Read more</div>
    </a>
</article>