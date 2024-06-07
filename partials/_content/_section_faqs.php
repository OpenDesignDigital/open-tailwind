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
                        <?php $acc = 1; while ( have_rows('faq_accordions') ) : the_row(); ?>
                            <div class="py-1 border-b ouline-none group" tabindex="<?php echo $acc; ?>">
                                <!-- Flex Container -->
                                <div class="flex items-center justify-between py-3  transition duration-500 cursor-pointer group ease">
                                    <!-- Tab Title -->
                                    <div class="transition duration-500 ease group-hover:text-red-500"><?php the_sub_field('accordion_title'); ?></div>
                                    <!-- Arrow -->
                                    <div class="transition duration-500 ease group-focus:-rotate-180 group-focus:text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12">
                                        <path
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="3"
                                            d="M1 1l8 8 8-8"
                                        />
                                        </svg>
                                    </div>
                                </div>
                                <!-- Tab Inner Content -->
                                <div class="overflow-hidden transition duration-500 group-focus:max-h-screen max-h-0 ease">
                                    <div class="py-2 ">
                                        <?php the_sub_field('accordion_text'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php $acc++; endwhile; ?>
                    <?php endif; ?>    
                </div>
            </div>
        </div>
    </div>
</section>