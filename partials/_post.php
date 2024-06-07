<section id="mainBody" class="post-content">
    <div class="container mx-auto flex flex-col py-16 max-w-3xl">
    <article <?php post_class(); ?>>

    <time datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>

    <div class="category-list">
						<ul class="flex flex-row gap-2 mb-4">
						<?php $categories = get_the_category();
							foreach ($categories as $category) : ?>
								<li class="text-base font-semibold">
									<a class="underline" href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>">
									<?php echo $category->name; ?>
									</a>
								</li>
						<?php endforeach; ?>
						</ul>
					</div>	

    <div class="the-content">
        <?php the_content(); ?>
    </div>
					<!-- pagintation -->
					<div id="pagination" class="clearfix blog-posts pg-<?php echo get_the_ID(); ?> flex flex-row justify-between">

						<?php previous_post_link( '<div class="btn-prev underline">%link</div>', 'Previous Article', ); ?>
						
						<?php next_post_link( '<div class="btn-next underline">%link</div>', 'Next Article' ); ?>
		
					</div><!-- ./pagination -->	

    </article>
    </div>
</section>
   