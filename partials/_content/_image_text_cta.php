<?php
    //option to alternate the order of the content
    $alternate = get_sub_field('alternate_order') ? "md:flex-row-reverse switched" : "";
    $title = get_sub_field('title');
    $paddingTop = get_sub_field('add_padding_top');
    $imageId = isset(get_sub_field('image')["id"]) ? get_sub_field('image')["id"] : null;
    $illImage = isset(get_sub_field('illustrated_image')["id"]) ? get_sub_field('illustrated_image')["id"] : null;
    $positionX = get_sub_field('illustrated_image_x_position');
    $positionY = get_sub_field('illustrated_image_y_position');
?>
<section class="image-text-cta pb-16 relative <?php if($paddingTop) { ?>pt-16<?php } ?>">
    <div class="container mx-auto flex flex-col md:flex-row gap-12 justify-between <?php echo $alternate; ?> js-show-on-scroll">
        <?php if($imageId) { ?>
            <div class="w-full md:w-1/2">
                <?php 
                    $size = 'post-thumbs';
                ?>
                <?php echo wp_get_attachment_image($imageId, $size, "",["class" =>"w-full h-auto aspect-auto"],["alt" => ''], ["loading" => "lazy"] ); ?> 
            </div>
        <?php } ?>
        <div class="w-full md:w-1/2 flex flex-col space-y-2 justify-center px-6 md:px-0">
        <?php if ($title) { ?>
        <h2><?php echo $title; ?></h2>
        <div class="text-lg the-content md:pr-6 xl:pr-16">
            <?php the_sub_field('text'); ?>
        </div>
        <?php } ?>
        <?php if( get_sub_field('cta') ): ?>  
                    <div class="cta">  
                        <?php
                            $link = get_sub_field('cta');
                            if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"class="btn-txt"><?php echo $link_title; ?></a>
                            <?php endif; ?>
                    </div>  
                <?php endif; ?>
        </div>
    </div>
    <?php if($illImage) { ?>
        <div class="ill-img absolute bg-img z-10 js-show-on-scroll" style="background-image:url('<?php echo wp_get_attachment_url($illImage); ?>'); left:<?php echo $positionX; ?>%; top:<?php echo $positionY; ?>%"></div>
    <?php }?>  
</section>
