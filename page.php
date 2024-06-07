<section class="main-content mt-16">
<div class="container mx-auto flex flex-col py-16 max-w-3xl">
<?php while (have_posts()) : the_post(); ?>
<?= partial("_basic_content"); ?>
<?php endwhile; ?>
</div>
</section>