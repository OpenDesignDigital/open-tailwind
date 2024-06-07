<section class="logos-block relative bg-slate-100 pb-16">
  
        <?php 
            $logosTitle = get_field('logos_title', 'options');
        ?>
        <?php if($logosTitle) {?>
        <h2 class="text-center my-12 text-4xl"><?php echo $logosTitle; ?></h2>
        <?php } ?>
        <div class="swiper logo-carousel">
            <div class="swiper-wrapper">
            <?php if( have_rows('client_logos', 'options') ): ?>
                <?php $count = 0; while ( have_rows('client_logos', 'options') ) : the_row(); ?>
                <div class="swiper-slide relative">
                <?php 
                    $imageId = get_sub_field('logo')["id"]; 
                    $size = 'post-thumbs';
                ?>
                <?php echo wp_get_attachment_image($imageId, $size, "",["class" =>"w-full h-auto logo-card"],["alt" => ''], ["loading" => "lazy"] ); ?>    
                </div>
                <?php $count++; endwhile; ?>
            <?php endif; ?>  
            </div>
            <div class="swiper-pagination"></div>
        </div>
   
    <!-- <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div> -->
</section>