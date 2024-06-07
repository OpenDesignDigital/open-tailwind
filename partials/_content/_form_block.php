<?php
    //option to alternate the order of the content
    $title = get_sub_field('title');
    $text = get_sub_field('text');
?>
<section id="FormBlock" class="image-text-cta pb-16">
    <div class="container mx-auto flex flex-col md:flex-row gap-12 justify-between">
        <div class="w-full md:w-1/2 flex flex-col space-y-4 justify-center px-8 md:px-0">
            <?php if ($title) { ?>
                <h2 class="text-4xl"><?php echo $title; ?></h2>
            <?php } ?>    
            <?php if ($text) { ?>
                <div class="text-lg pb-4 md:text-xl md:pr-6 xl:pr-16">
                    <?php the_sub_field('text'); ?>
                </div>
            <?php } ?>    
            <div class="with-form">
               <?php echo do_shortcode('[ninja_form id=3]'); ?>
            </div>
        </div>
        <?php 
            $imageId = get_sub_field('image')["id"]; 
            $size = 'post-thumbs';
        ?>
        <?php if ($imageId) { ?>
        <div class="w-full md:w-1/2">
            <?php echo wp_get_attachment_image($imageId, $size, "",["class" =>"w-full h-auto aspect-auto"],["alt" => ''], ["loading" => "lazy"] ); ?> 
        </div>
        <?php } ?>
    </div>
</section>
