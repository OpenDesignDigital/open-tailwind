<section class="image-gallery relative js-show-on-scroll">
    <div class="container mx-auto pb-16">
        <?php 
            $galleryTitle = get_sub_field('title');
        ?>
        <?php if($galleryTitle) {?>
        <h2 class="text-center my-12 text-4xl text-slate-800"><?php echo $galleryTitle; ?></h2>
        <?php } ?>
        <div class="swiper gallery-carousel">
            <div class="swiper-wrapper">
            <?php if( have_rows('image_gallery') ): ?>
                <?php $count = 0; while ( have_rows('image_gallery') ) : the_row(); ?>
                <div class="swiper-slide relative">
                <?php echo partial("_content/_card_gallery"); ?>
                </div>
                <?php $count++; endwhile; ?>
            <?php endif; ?>  
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</section>