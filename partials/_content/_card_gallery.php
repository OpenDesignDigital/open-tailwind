<article class="flex flex-col space-y-4">
<?php 
        $imageId = get_sub_field('image')["id"]; 
        $size = 'post-thumbs';
    ?>
    <?php echo wp_get_attachment_image($imageId, $size, "",["class" =>"w-full h-auto gallery-card"],["alt" => ''], ["loading" => "lazy"] ); ?>    
</article>