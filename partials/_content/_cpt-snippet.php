                        <div class="flex flex-col gap-12 justify-between md:flex-row cpt-item js-show-on-scroll">
                            <div class="w-full md:w-1/2">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="w-full md:w-1/2 flex flex-col space-y-4 justify-center px-8 md:px-0">
                                <h2 class="text-4xl"><?php the_title(); ?></h2>
                                <div class="text-lg the-content md:pr-6 xl:pr-16">
                                    <?php echo $excerpt = wp_trim_words(get_the_content(), $num_words = 25, $more = '...'); ?>
                                </div>
                                <div class="cta">  
                                    <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
                                </div>  
                            </div>
                        </div> 