<?php
$logo =  get_field("logo", "options");
?>
<header class="fixed w-full top-0 bg-transparent text-white z-50">
    <div class="flex py-4 justify-between items-center mx-6 md:mx-12 md:p-4">
    <?php
    if (isset($logo)) {
    ?>
        <div>
            <a href="<?= esc_url(home_url('/')); ?>">
            <?php
                $imageId = $logo["id"];
                $size = 'large'; // (thumbnail, medium, large, full .etc)
                // (full is good here as the function outputs a srcset)
                echo wp_get_attachment_image($imageId, $size, "", ["class" => "logo"]);
                ?>
            </a>
        </div>
        <?php
    }
    ?>
        <nav class="hidden lg:flex">
            <?= partial("_main_navigation"); ?>
        </nav>
        <a id="book" class="book-btn" href="#Book">Book Now</a>
        <div class="md:hidden relative mt-4 md:mr-4">
            <button
              id="menu-btn"
              type="button"
              class="z-40 hamburger inline-block w-[24px] h-[24px] md:hidden focus:outline-none"
            >
              <span class="hamburger-top"></span>
              <span class="hamburger-middle"></span>
              <span class="hamburger-bottom"></span>
            </button>
          </div>
    </div>
</header>

<!-- Mobile Menu -->
<div
    id="menu"
    class="fixed top-0 bottom-0 left-0 hidden flex-col self-end w-full h-full py-1 pt-40 pl-12 space-y-3 text-lg text-white uppercase bg-black z-40"
    >
    <?= partial("_mobile_navigation"); ?>
</div>
