
<?php
$hero_image = get_field('default_news_hero', 'options');
?>
<section id="hero" class="relative">
    
    <?php 
        $imageId = $hero_image['id'];
        $size = "full";

    ?>

 <?php echo wp_get_attachment_image($imageId, $size, "",["class" =>"relative w-full h-96 object-cover md:h-full"],["alt" => ''], ["loading" => "lazy"] ); ?> 
    
    <div class="absolute z-20 flex flex-col bottom-10 px-10 container mx-auto space-y-5 md:left-16 md:px-0 md:top-1/2">

        <?php if( is_home() ){?>
            <?php
                $our_title = get_the_title( get_option('page_for_posts', true) );
            ?>
            <h1 class="text-5xl text-white"><?php echo $our_title; ?></h1>

          <?php } else { ?>
            <h1 class="text-5xl text-white"><?php the_title(); ?></h1>
        <?php } ?> 

        
    </div>
    <div class="absolute bg-zinc-900 bg-opacity-25 z-10 w-full h-full top-0"></div>
</section>







