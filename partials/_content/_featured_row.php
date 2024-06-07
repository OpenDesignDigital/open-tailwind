<?php
    $columns = get_sub_field('columns_per_row');
    $paddingTop = get_sub_field('add_padding_top');
    $section_heading = get_sub_field('title');
    $section_intro = get_sub_field('text');
?>

<section class="featured-row pb-16 <?php if($paddingTop) { ?>pt-16<?php } ?>">
    <div class="container mx-auto">

    <?php
        if ($section_heading) {
        ?>
        <div class="section-title">
            <h2 class="text-4xl mb-4"><?php echo $section_heading; ?></h2>
        </div>  
        <?php
        }
        ?>
            <?php
            if ($section_intro) {
            ?>  
            <div class="the-content mb-8 max-w-2xl">
                <p><?php echo $section_intro; ?></p>
            </div>
            <?php
            }
            ?>
        <div class="grid grid-cols-1 gap-12 md:grid-cols-<?php echo $columns; ?> js-show-on-scroll">
            <?php if( have_rows('feature_cards') ): ?>
                <?php $count = 0; while ( have_rows('feature_cards') ) : the_row(); ?>
                    <?php echo partial("_content/_card"); ?>
                <?php $count++; endwhile; ?>
            <?php endif; ?>      
        </div>
    </div>
</section>
