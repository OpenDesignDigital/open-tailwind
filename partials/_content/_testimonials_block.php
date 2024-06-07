<?php
 $testimonialType = get_sub_field('testimonial_options');
?>
<section class="testimonials bg-neutral-500 js-show-on-scroll">
    <div class="container mx-auto mb-12">
        <h2 class="text-center text-4xl my-12 text-white">What Our Customers Say</h2>
        <div class="swiper testimonials-carousel relative pb-24">
            <div class="swiper-wrapper">

            <?php if ($testimonialType == 'default') { ?>

                <?php if( have_rows('testimonials', 'options') ): ?>
                    <?php $count = 0; while ( have_rows('testimonials', 'options') ) : the_row(); ?>
                    <?php 
                        $name = get_sub_field('name');
                        $testimonial = get_sub_field('testimonial');
                    ?>
                    <div class="swiper-slide">
                        <div class="flex flex-col w-full max-w-4xl mx-auto space-y-6 px-12">
                            <blockquote class="text-center text-white text-lg italic">
                                <?php echo $testimonial; ?>
                            </blockquote>
                            <p class="text-center text-sm text-white font-semibold pb-12"><?php echo $name; ?></p>
                        </div>
                    </div>
                    <?php $count++; endwhile; ?>
                <?php endif; ?>   

                <? } elseif ($testimonialType == 'custom') { ?>

                    <?php if( have_rows('custom_testimonials') ): ?>
                        <?php $count = 0; while ( have_rows('custom_testimonials') ) : the_row(); ?>
                        <?php 
                            $name = get_sub_field('name');
                            $testimonial = get_sub_field('testimonial');
                        ?>

                        <div class="swiper-slide">
                            <div class="flex flex-col w-full max-w-4xl mx-auto space-y-6 px-12">
                                <blockquote class="text-center text-lg text-white italic">
                                    <?php echo $testimonial; ?>
                                </blockquote>
                                <p class="text-center text-sm text-white font-semibold pb-12"><?php echo $name; ?></p>
                            </div>
                        </div>

                        <?php $count++; endwhile; ?>
                    <?php endif; ?>

                <?php } ?>     
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
