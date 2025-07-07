<?php 
/*
Template Name: Документы. Шаблон
Template Post Type: page
*/ 
?>

<?php get_header(); ?>
<main>
	<section class="licenses container">
		<h1 class="title">Документы</h1>

		<?php if( have_rows('documents_list') ): ?>
			<div class="licenses__links">
					<?php while( have_rows('documents_list') ): the_row(); 
							$file = get_sub_field('documents_list_file');
							$label = get_sub_field('documents_list_label');
						
							?>
							<a href="<?= $file ?>" target="_blank" class="licenses__link">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/file-search.svg" alt="" />
								<span><?= $label ?></span>
							</a>
					<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</section>
</main>

<?php get_footer(); ?>