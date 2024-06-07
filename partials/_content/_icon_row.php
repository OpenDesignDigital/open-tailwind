<?php
    $columns = get_sub_field('columns_per_row');
    $paddingTop = get_sub_field('add_padding_top');
?>

<section class="featured-row py-16 <?php if($paddingTop) { ?>pt-16<?php } ?> bg-gray-200 mb-16 js-show-on-scroll">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-12 md:grid-cols-<?php echo $columns; ?>">
            <?php if( have_rows('icon_cards') ): ?>
                <?php $count = 0; while ( have_rows('icon_cards') ) : the_row(); ?>
                    <?php echo partial("_content/_card_icon"); ?>
                <?php $count++; endwhile; ?>
            <?php endif; ?>      
        </div>
    </div>
</section>
