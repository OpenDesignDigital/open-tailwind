<?php 
 $newsTitle = get_field('newsletter_title', 'options');
 $newsByline = get_field('newsletter_byline', 'options')
?>
<section id="newsletter" class="bg-neutral-500 js-show-on-scroll">
    <div class="container mx-auto flex flex-col items-center justify-between px-8 py-16 gap-10 md:flex-row md:px-0">
        <div class="w-full flex flex-col the-content md:w-2/4 md:pr-40">
            <?php if($newsTitle ) {?>
                <h2 class="text-white"><?php echo $newsTitle; ?></h3>
            <?php } ?>    
            <?php if($newsByline ) {?>
                <p class="text-white"><?php echo $newsByline; ?></p>
            <?php } ?>    
        </div>
        <div class="w-full with-form md:w-2/4">
            <?php echo do_shortcode('[ninja_form id=2]'); ?>
        </div>
    </div>
</section>