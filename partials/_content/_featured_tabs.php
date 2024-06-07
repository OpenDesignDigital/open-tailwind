<!-- Featured Tabs -->
<section id="tabs">
    <!-- Tabs/Panels Container -->
    <div class="container relative mx-auto pb-16 js-show-on-scroll">
        <!-- Tabs Titles Container -->
        <div class="flex flex-col justify-center max-w-xl mx-auto mb-6 border-b md:space-x-10 md:flex-row">
        <?php if( have_rows('tabs') ): ?>
                <?php $tabT = 0; while ( have_rows('tabs') ) : the_row(); ?>



            <!-- Tab Titles -->
            <div class="flex justify-center text-center text-gray-600 border-b md:border-b-0 hover:text-cyan-500 tab md:w-1/3" data-target="panel-<?php echo $tabT ?>">

            <div class="py-5 <?php if( $tabT == 0 ) { ?>border-b-4 border-cyan-500<?php } ?> cursor-pointer" data-target="panel-<?php echo $tabT ?>">
                <?php the_sub_field('tab_title'); ?></div>
            </div>
            
            <?php $tabT++; endwhile; ?>
            <?php endif; ?>   
        </div>
        <!-- Tabs Panels Container -->
        <div id="panels" class="container mx-auto">
            <!-- Tabs Panel -->
            <?php if( have_rows('tabs') ): ?>
                <?php $tabC = 0; while ( have_rows('tabs') ) : the_row(); ?>

                  <?php 
                    if($tabC !== 0) {
                        $hideMe = 'hidden';
                    }
                  ?>

            <div class="flex flex-col  <?php echo $hideMe; ?> py-5 gap-20 md:flex-row md:space-x-7 panel panel-<?php echo $tabC; ?>">
                <!-- Panel Image -->
                <div class="flex justify-center md:w-1/2">
                    <?php 
                    $imageId = get_sub_field('tab_image')["id"]; 
                    $size = 'post-thumbs';
                    ?>
                    <?php echo wp_get_attachment_image($imageId, $size, "",["class" =>"w-full h-auto aspect-auto relative z-10"],["alt" => ''], ["loading" => "lazy"] ); ?> 
                </div>

                                                                                        <!-- Panel Content -->
                <div class="flex flex-col px-8 space-y-8 md:w-1/2 md:px-0">
                    <h3 class="mt-23 text-3xl font-semibold text-left md:mt-0 md:text-left"><?php the_sub_field('tab_title') ?></h3>
                    <div class="max-w-md text-grayishBlue md:text-left">
                        <?php the_sub_field('tab_text'); ?>
                    </div>

                    <?php if( get_sub_field('tab_cta') ): ?> 
                    <?php
                        $link = get_sub_field('tab_cta');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $link_title; ?></a>
                        <?php endif; ?>
                    <?php endif; ?> 

                </div>

            </div>
            <?php $tabC++; endwhile; ?>
            <?php endif; ?>   
        </div>
    </div>
</section>