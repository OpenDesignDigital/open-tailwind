<?php 
    $title = get_sub_field('title');
?>

<article class="flex flex-col space-y-4">
    <?php if( get_sub_field('cta') ): ?> 
    <?php
        $link = get_sub_field('cta');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="flex flex-col space-y-4" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        <?php endif; ?>
    <?php endif; ?>    
    <?php 
        $imageId = get_sub_field('icon')["id"]; 
        $size = 'small';
    ?>
    <?php echo wp_get_attachment_image($imageId, $size, "",["class" =>"w-16 h-auto aspect-auto mx-auto mb-2"],["alt" => ''], ["loading" => "lazy"] ); ?>    
        <?php if ($title) { ?>
            <h3 class="mx-auto text-center md:px-0"><?php echo $title; ?></h3>
        <?php } ?>

        <?php if( get_sub_field('cta') ): ?>  
       
             
        <div class="btn-link dark inline-block mx-auto"><?php echo $link_title; ?></div>        
             
        </a>  

        <?php endif; ?>
</article>
