<section class="featured-carousel relative pb-16 js-show-on-scroll">
    <div class="container mx-auto">
        
        <h2 class="text-center my-12 text-4xl text-slate-800">Card Carousel</h2>
       
            <div class="swiper card-carousel">
                <div class="swiper-wrapper">
                <?php if( have_rows('card_carousel') ): ?>
                <?php $count = 0; while ( have_rows('card_carousel') ) : the_row(); ?>
                    <div class="swiper-slide relative">
                    <?php echo partial("_content/_card"); ?>
                    </div>
                <?php $count++; endwhile; ?>
            <?php endif; ?>     
                </div>
               
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
    </div>
</section>
