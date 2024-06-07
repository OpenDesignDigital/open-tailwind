<?php
$altLogo =  get_field("logo_alt", "options");
?>
<footer class="py-16 bg-zinc-900 px-8 md:px-4">

    <div class="flex flex-col mx-auto max-w-48 pb-12">
      <?php
      if (isset($altLogo)) {
      ?>
          <a href="<?= esc_url(home_url('/')); ?>">
              <?php
                  $imageId = $altLogo["id"];
                  $size = 'large'; // (thumbnail, medium, large, full .etc)
                  // (full is good here as the function outputs a srcset)
                  echo wp_get_attachment_image($imageId, $size, "", ["class" => "logo"]);
                  ?>
          </a>
      <?php
          }
      ?>
    </div>

    <div class="container mx-auto py-6 border-t-2 border-white ">
        <div class="flex flex-col md:grid md:grid-cols-4 gap-0 md:gap-12">
              <div class="col flex flex-col">
                  <h4 class="text-white font-semibold mb-4">Address</h4>
                  <div class="text-base text-white leading-relaxed"><?php the_field('office_address', 'options') ?></div>
              </div>
              <div class="col flex flex-col">
                <h4 class="text-white font-semibold mb-4">Contact</h4>
                <div class="flex flex-col mb-2">
                  <a class="flex flex-row gap-2 items-center" href="tel:<?php echo str_replace(' ', '', get_field('office_telephone', 'options')); ?>">

                  <span class="text-white"><?php the_field('office_telephone', 'options'); ?></span>
                  </a>
                </div>

                <div class="flex flex-col">
                  <a class="flex flex-row gap-2 items-center" href="mailto:<?php the_field('office_email', 'options'); ?>">

                  <span class="text-white"><?php the_field('office_email', 'options'); ?></span>
                  </a>
                </div>

              </div>
              <div class="col flex flex-col">
                <h4 class="text-white font-semibold mb-4">Opening Times</h4>

                <div class="flex flex-row gap-2 items-center">


                  <span class="text-white"><?php the_field('opening_hours', 'options') ?></span>
                 
                </div>


              </div>
              <div class="col flex flex-col">
              <h4 class="text-white font-semibold mb-4">Socials</h4>
                <div class="flex space-x-6">
                  <?php 
                    $facebook = get_field('facebook', 'options');
                    $xTwitter = get_field('xtwitter', 'options');
                    $instagram = get_field('instagram', 'options');
                    $pinterest = get_field('pinterest', 'options');
                  ?>
                  <?php if ($facebook) {?>
                  <a href="<?php echo $facebook; ?>" class="block w-8 h-8">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/icon-facebook.svg" alt="Facebook" class="w-full ficon" />
                  </a>
                  <?php } ?>
                  <?php if ($xTwitter) {?>
                  <a href="<?php echo $xTwitter; ?>" class="block w-8 h-8">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/icon-twitter.svg" alt="X" class="ficon w-full" />
                  </a>
                  <?php } ?>
                  <?php if($instagram) {?>
                  <a href="<?php echo $instagram; ?>" class="block w-8 h-8">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/icon-instagram.svg" alt="Instagram Icon" class="ficon w-full" />
                  </a>
                  <?php } ?>
                  <?php if($pinterest) {?>
                  <a href="<?php echo $youtube; ?>" class="block w-8 h-full">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/icon-pinterest.svg" alt="Pinterest Icon" class="ficon w-full h-full block" />
                  </a>
                  <?php } ?>
                </div>
              </div>
        </div>
      </div>

    <?= partial("_partners_accreditations"); ?>

    <?= partial("_legal_signoff"); ?>

</footer>