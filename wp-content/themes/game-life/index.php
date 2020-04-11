<?php get_header(); ?>

<div class="content">
	<div class="my-container">
		<div class="page">
			<div class="sidebar">
				 <ul class="categories">
					<?php wp_list_categories(array(
						'hide_empty' => '0',
						'orderby' => 'ID',
						'title_li' => '',
					))  ?>
				</ul>
			</div>
			<div class="my-page-content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				  <div class="game">
					<div class="game__image">
						<?php the_post_thumbnail() ?>
					</div>
					<div class="game__info">
						<div class="game__title">
							<h2><?php the_title() ?></h2>
						</div>
						<div class="game__desc">
							<?php the_content(''); ?>
						</div>
						<a href="<?php the_permalink() ?> " class="button">Подробнее</a>
					</div>
				</div>
				<?php endwhile; ?>
				  <!-- post navigation -->
				<?php else: ?>
				  <!-- no posts found -->
				  <p>Постов нет</p>
				<?php endif; ?>
			</div>
		</div>



<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>
<?php get_footer();?>
