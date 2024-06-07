<section id="faq" class="js-show-on-scroll">
    <div class="container mx-auto pb-16 px-8 max-w-7xl md:px-0">
        <?php
            $sectionTitle = get_sub_field('section_title');
            $text = get_sub_field('text');
        ?>
        <?php if($sectionTitle){?>
        <h2 class="text-center my-12 text-4xl "><?php echo $sectionTitle; ?></h2>
        <?}?>
        <?php if($text){?>
            <div class="flex flex-col mx-auto max-w-3xl">
                <p class=""><?php echo $text; ?></p>
            </div>
        <?}?>
        <div id="faq-accordion">
            <!-- Main Container -->
            <div class="container mx-auto">
                <!-- Accordion Container -->
                <div class="max-w-3xl m-8 mx-auto overflow-hidden">
                    <!-- Accordion Item -->
                     
                    <?php if( have_rows('faq_accordions') ): ?>
                        <div class="accordion-container">
                        <?php $acc = 1; while ( have_rows('faq_accordions') ) : the_row(); ?>                    

                        <div class="ac">
                            <h2 class="ac-header">
                            <button class="ac-trigger"><?php the_sub_field('accordion_title'); ?></button>
                            </h2>
                            <div class="ac-panel">
                                <div class="ac-text">
                                    <?php the_sub_field('accordion_text'); ?>
                                </div>
                            </div>
                        </div>



                    <?php $acc++; endwhile; ?>
                    </div>  
                    <?php endif; ?>      
                          
                </div>
            </div>
        </div>
    </div>
</section>