<?php 
 $title = get_sub_field('title');
?>
<section id="Timeline" class="py-16">
    <div class="container mx-auto flex flex-col js-show-on-scroll">
        <div class="flex flex-col mx-auto max-w-2xl space-y-6 mb-16">
            <?php if($title) {?>
            <h2 class="text-center"><?php echo $title; ?></h2>
            <?php } ?>
            <?php if(get_sub_field('text')): ?>
                <div class="the-content text-lg text-center">
                    <p><?php the_sub_field('text'); ?></p>
                </div>
            <?php endif; ?>    
        </div>
        <div class="flex flex-col space-y-12 timeline-list">
        <?php if( have_rows('milestones') ): ?>
            <?php $count = 0; while ( have_rows('milestones') ) : the_row(); ?>
            <?php 
                $year = get_sub_field('year');
                $imageId = isset(get_sub_field('image')["id"]) ? get_sub_field('image')["id"] : null;

            ?>
            <div class="flex flex-col flex-row gap-12 justify-between relative milestone md:flex-row md:gap-24">
                <div class="absolute bar top-o h-full w-1 left-2/4 -translate-x-2/4 bg-black is-line z-10"></div>
                <?php if($imageId) { ?>
                <div class="w-full md:w-1/2 img-col">
                    <?php 
                        $size = 'post-thumbs';
                    ?>
                    <?php echo wp_get_attachment_image($imageId, $size, "",["class" =>"w-full h-auto aspect-auto"],["alt" => ''], ["loading" => "lazy"] ); ?> 
                </div>
                <?php } ?>
                <div class="w-full md:w-1/2 flex flex-col space-y-2 px-6 md:px-0 pt-12 text-col">
                    <?php if ($year) { ?>
                    <h2><?php echo $year; ?></h2>
                    <div class="text-lg the-content">
                        <?php the_sub_field('description'); ?>
                    </div>
                    <?php } ?>
                </div>    
            </div>
            <?php $count++; endwhile; ?>
        <?php endif; ?>   
        </div>
    </div>
</section>