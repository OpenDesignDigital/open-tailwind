<?= partial('_hero_blog'); ?>
<?php while (have_posts()) : the_post(); ?>
<?= partial('_post'); ?>
<?php endwhile; ?>