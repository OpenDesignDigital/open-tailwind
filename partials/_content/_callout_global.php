<?php
 $bannerTitle = get_field('banner_title', 'options');
 $bannerText = get_field('banner_text', 'options')
?>

<section id="callOut" class="flex flex-col bg-zinc-800 md:flex-row md:gap-12 js-show-on-scroll">
    
    <div class="flex flex-col w-100 md:w-1/4">
    <?php 
    $imageId = get_field('banner_thumbnail', 'options')["id"]; 
	$size = 'large';

?>

 <?php echo wp_get_attachment_image($imageId, $size, "",["class" =>"w-full h-full min-h-80 object-cover"],["alt" => ''], ["loading" => "lazy"] ); ?> 
    </div>
    <div class="flex flex-col w-100 md:w-3/4">
        <div class="flex flex-col h-full py-8 space-y-4 px-8 md:px-0 md:flex-row md:py-0">
            <div class="flex flex-col justify-center md:w-2/3">
                <?php if($bannerTitle){?>
                    <h3 class="text-3xl text-white"><?php echo $bannerTitle; ?></h3>
                <?php } ?>
                <?php if($bannerText){?>   
                    <p class="text-lg text-white max-w-2xl"><?php echo $bannerText; ?></p> 
                <?php } ?>
            </div>
            <div class="flex flex-col  justify-center items-center md:w-1/3">
                <?php if( get_field('banner_cta', 'options') ): ?> 
                    <?php
                        $link = get_field('banner_cta', 'options');
                        if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $link_title; ?></a>
                    <?php endif; ?>
                <?php endif; ?> 
            </div>
        </div>
    </div>
</section>