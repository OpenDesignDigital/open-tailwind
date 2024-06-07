    <article class="flex flex-col md:flex-row gap-12 justify-between">
            
            <div class="w-full md:w-1/2">
                <a class="link-wrap" href="<?php the_permalink(); ?>">
                <?php 
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail("post-thumbs");
                        }
                ?>
                </a>
            </div>

            <div class="w-full md:w-1/2 flex flex-col space-y-4 justify-center px-12 md:px-0">
                

                    <h2 class="text-4xl"><?php the_title(); ?></h2>
                    <div class="text-lg the-content md:pr-6 xl:pr-16">
                        <p><?php echo $excerpt = wp_trim_words(get_the_content(), $num_words = 14, $more = '...'); ?></p>
                    </div>
                    <div class="cta"> 
                        <a href="<?php the_permalink(); ?>" class="btn-txt">Read more</a>
                    </div>
               
               
            </div>    
        
    </article>