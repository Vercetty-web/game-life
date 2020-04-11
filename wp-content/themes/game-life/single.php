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
			<div class="page-content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="game">
					<div class="game__info">
						<div class="game__title">
							<h1><?php the_title() ?></h1>
						</div>
						<div class="flex">
							<div class="game__image">
								<?php the_post_thumbnail() ?>
							</div>
							<div class="game__desc">
								<p><b>Разработчик:</b> EA DICE</p>
						        <p><b>Издатель:</b> EA Games</p>
						        <p><b>ОС:</b> Windows 7 / 8 / 8.1 / 10 (x64)</p>
						        <p><b>Жанры:</b> Action (Shooter), 3D, 1st Person</p>
						        <p><b>Год выхода:</b> 2017</p>
						        <p><b>Язык интерфейса:</b> Русский</p>
						        <p><b>Язык озвучки:</b> Русский</p>
						        <h2>Системные требования</h2>
						        <p><b>Процессор:</b> Intel Core i5 2500K - 3.3 Ггц / AMD FX 4100 - 3.6 Ггц</p>
						        <p><b>Озу:</b> 8 Гб</p>
						        <p><b>Видео карта:</b> Nvidia GeForce GTX 660 / AMD Radeon HD 7870 (2048 Мб)</p>
						        <p><b>Свободное место:</b> 31 GB</p>
							</div>
						</div>
						<h2>Описание</h2>
				        <?php the_content(''); ?>
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
</body>
</html>
<?php get_footer();?>


