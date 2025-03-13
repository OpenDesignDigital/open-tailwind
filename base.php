<?php
use Hustle\Setup;
use Hustle\Wrapper;
?>
<!doctype html>
<html class="no-js scroll-smooth" <?php language_attributes(); ?>>
    <?= partial("_head"); ?>

    <body <?php body_class(); ?>>
        <main class="min-h-screen flex flex-col">
        <a class="screen-reader-text skip-link" href="#Main">Skip to content</a>
            <?= partial("_header"); ?>

            <?php /*
                Below renders any template page into that space.
                - index
                - page
                - single
                - search
                - template/homepage
                - etc
            */ ?>

            <div class="flex-1" id="Main">
                <?php include Wrapper\template_path(); ?>
            </div>

            <?= partial("_footer"); ?>
        </main>

        <?php wp_footer(); ?>

    </body>

</html>