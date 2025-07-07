<?php 
/*
Template Name: Надзорные органы. Шаблон
Template Post Type: page
*/ 
?>

<?php get_header(); ?>
<main>
	<section class="control container">
		<h1 class="title">Надзорные органы</h1>

		<div class="control__items">
			<a href="https://minzdrav.gov.ru/" target="_blank" class="control__item">
				<img class="control__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/control/minzdrav.png" alt="" />
				<span class="control__item-text"
					><b>Министерство здравоохранения российской федерации</b></span
				>
			</a>
			<a href="https://www.roszdravnadzor.gov.ru/" target="_blank" class="control__item">
				<img class="control__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/control/nadzor.png" alt="" />
				<span class="control__item-text">
					<b>Федеральная служба по надзору в сфере здравоохранения</b>
				</span>
			</a>
			<a href="https://www.rospotrebnadzor.ru/" target="_blank" class="control__item">
				<img class="control__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/control/prav.png" alt="" />
				<span class="control__item-text">
					<b
						>Федеральная служба по надзору в сфере защиты прав потребителей и благополучия
						человека</b
					>
				</span>
			</a>
		</div>
	</section>
</main>

<?php get_footer(); ?>