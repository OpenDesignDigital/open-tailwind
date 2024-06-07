    <div class="container mx-auto py-6 border-t-2 border-white">
      <div class="flex flex-row space-between justify-center gap-6 md:gap-12">
        <?php if( have_rows('partners_logos', 'options') ): ?>
            <?php $count = 0; while ( have_rows('partners_logos', 'options') ) : the_row(); ?>    
            <div class="col">
            <?php 
                $imageId = get_sub_field('logo')["id"]; 
                $size = 'post-thumbs';
            ?>
            <?php echo wp_get_attachment_image($imageId, $size, "",["class" =>"w-full h-auto aspect-auto mb-2"],["alt" => ''], ["loading" => "lazy"] ); ?>    
            </div>
          <?php $count++; endwhile; ?>
        <?php endif; ?>  
      </div>
    </div>