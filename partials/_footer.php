<?php
$altLogo =  get_field("logo_alt", "options");
?>
<footer class="py-16 bg-zinc-900">

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

    <div class="container mx-auto py-6 border-t-2 border-white">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-0 md:gap-12">
            <div class="col flex flex-col space-y-4">
                <h4 class="text-white font-semibold">Address</h4>
                <div class="text-base text-white"><?php the_field('office_address', 'options') ?></div>
            </div>
            <div class="col flex flex-col space-y-4 with-menu">
              <h4 class="text-white font-semibold">Contact</h4>
              <ul>
                <li>             
                   <a class="transition-all underline mt-0 text-white" href="tel:<?php echo str_replace(' ', '', get_field('office_telephone', 'options')); ?>"><?php the_field('office_telephone', 'options'); ?></a>
                  </li>
                <li>              
                  <a class="transition-all underline text-white mt-0" href="mailto:<?php the_field('office_email', 'options'); ?>"><?php the_field('office_email', 'options'); ?>
                </a>
              </li>
              </ul>


            </div>
            <div class="col flex flex-col space-y-4">
              <h4 class="text-white">Opening Times</h4>
              <div class="text-base text-white"><?php the_field('opening_hours', 'options') ?></div>
            </div>
            <div class="col flex flex-col space-y-4">
            <h4 class="text-white">Socials</h4>
              <div class="flex space-x-6">
                <a href="#" class="block w-8 h-8">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/icon-facebook.svg" alt="" class="w-full ficon" />
                </a>
                <a href="#" class="block w-8 h-8">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img//icon-twitter.svg" alt="" class="ficon w-full" />
                </a>
                <a href="#" class="block w-8 h-8">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/icon-pinterest.svg" alt="" class="ficon w-full" />
                </a>
                <a href="#" class="block w-8 h-8">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/icon-instagram.svg" alt="" class="ficon w-full" />
                </a>
              </div>
            </div>
      </div>
    </div>

    <?= partial("_partners_accreditations"); ?>

    <?= partial("_legal_signoff"); ?>

</footer>