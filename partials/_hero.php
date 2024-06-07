<?php
$hero = get_field('hero');
$customTitle = $hero['title'];
$byline = $hero['byline'];
if( $hero ): ?>
<section id="hero" class="relative">
    
    <?php 
        $imageId = $hero['image']["id"]; 
        $size = 'full';

    ?>

 <?php echo wp_get_attachment_image($imageId, $size, "",["class" =>"relative w-full h-96 object-cover md:h-full"],["alt" => ''], ["loading" => "lazy"] ); ?> 
    
    <div class="absolute z-20 flex flex-col bottom-10 px-10 container max-w-lg mx-auto space-y-5 md:left-16 md:px-0 md:top-2/4 md:-translate-y-2/4 md:bottom-[unset]">

        <?php if ($customTitle) { ?>
        <h1 class="text-5xl text-white"><?php echo $hero['title']; ?> (h1)</h1>
        <?php } else { ?>
        <h1 class="text-5xl text-white"><?php the_title(); ?> (h1)</h1>
        <?php } ?>
        <?php if ($byline) { ?>
        <p class="text-lg text-white"><?php echo $hero['byline']; ?></p>
        <?php } ?>
        <?php if ($hero['cta'])  {?>
        <a class="btn" href="<?php echo esc_url( $hero['cta']['url'] ); ?>"><?php echo esc_html( $hero['cta']['title'] ); ?></a>
        <?php } ?>
        
    </div>
    <div class="absolute bg-zinc-900 bg-opacity-25 z-10 w-full h-full top-0"></div>
</section>
<?php endif; ?>






