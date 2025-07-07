<?php 
/*
Template Name: Лицензии. Шаблон
Template Post Type: page
*/ 
?>

<?php get_header(); ?>
<main>
	<section class="licenses container">
		<h1 class="title">Лицензии</h1>

		<div class="licenses__links">
			<a href="assets/Лицензия ООО БМЛ.PDF" target="_blank" class="licenses__link">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/file-check-2.svg" alt="" />
				<span>Лицензия ООО «Байкальский Медицинский Легион»</span>
			</a>
		</div>
	</section>
</main>

<?php get_footer(); ?>