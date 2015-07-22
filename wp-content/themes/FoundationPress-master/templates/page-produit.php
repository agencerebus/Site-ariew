<?php
/*
Template Name: Page Produit
*/
get_header(); ?>

<?php get_template_part( 'parts/menu-main' ); ?>
<div class="row fullwidth" id="intro_produit">
	<img src="<?php the_field('image_face')?>" id="image_face" />
	<div class="small-12 large-12 columns" role="main" id="produit_bloc_5">
		<div class="row2" id="immersion">
			<div class="small-12 large-4 columns">
				<h3 id="immersion_title"><?php the_field('design_title')?></h3>
				<div id="immersion_content"><?php the_field('design_text') ?></div>
				<h3 id="haute_def_title"><?php the_field('haute_def_title')?></h3>
				<div id="haute_def_content"><?php the_field('haute_def_text') ?></div>
				<h3 id="capacite_title"><?php the_field('capacite_title')?></h3>
				<div id="capacite_content"><?php the_field('capacite_texte') ?></div>
			</div>
			<div class="small-12 large-8 columns" id="immersion_img_container">
				<img src="<?php the_field('immersion_img')?>" id="immersion_img"/>
				<span class="circle1"></span>
				<span class="circle2"></span>
				<span class="circle3"></span>
			</div>
		</div>
		<div class="row2" id="accordion-produit">
			<img src="<?php the_field('immersion_img')?>" id="immersion_img"/>
			<ul class="accordion" data-accordion>
				<li class="accordion-navigation">
					<a href="#panel1a"><?php the_field('design_title')?><i class="fa fa-plus"></i></a>
					<div id="panel1a" class="content">
						<?php the_field('design_text') ?>
					 </div>
				</li>
				<li class="accordion-navigation">
					<a href="#panel2a"><?php the_field('haute_def_title')?><i class="fa fa-plus"></i></a>
					<div id="panel2a" class="content">
						<?php the_field('haute_def_text') ?>
					 </div>
				</li>
				<li class="accordion-navigation">
					<a href="#panel3a"><?php the_field('capacite_title')?><i class="fa fa-plus"></i></a>
					<div id="panel3a" class="content">
						<?php the_field('capacite_texte') ?>
						</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="row fullwidth" id="produit_second_row">
	<div class="small-12 medium-5 large-7 columns" role="main" id="produit_bloc_img">
		<img src="<?php the_field('background_intro')?>" />
	</div>
	<div class="small-12 medium-7 large-5 columns" role="main" id="produit_bloc_content">
		<div class="row2">
			<div id="produit_content_container">
				<h2 id="intro_title"><?php the_field('intro_title') ?></h2>
				<?php the_field('intro_content')?>
			</div>
		</div>
	</div>
	<div class="small-12 large-12 columns" role="main" id="produit_bloc_2" >
		<div class="row2" id="slider_wrapper">
			<h2 id="titre_slider"><?php the_field('titre_slider')?></h2>
			<div class="small-12 medium-6 large-6 columns">
				<img src="<?php the_field('img_course')?>" class="img_slider" id="img_elegance">
				<img src="<?php the_field('img_poursuite')?>" class="img_slider" id="img_poursuite">
				<img src="<?php the_field('img_free')?>" class="img_slider" id="img_free">
				<img src="<?php the_field('img_defi')?>" class="img_slider" id="img_defi">
				<img src="<?php the_field('img_montre')?>" class="img_slider" id="img_montre">
			</div>
			<div class="small-12 medium-6 large-6 columns">
				<div class="elegance_wrapper">
					<h3 class="slider_content_title"><?php the_field('titre_course') ?></h3>
					<div class="slider_content"><?php the_field('content_course')?></div>
				</div>
				<div class="free_wrapper">
					<h3 class="slider_content_title"><?php the_field('titre_free') ?></h3>
					<div class="slider_content"><?php the_field('content_free')?></div>
				</div>
				<div class="defi_wrapper">
					<h3 class="slider_content_title"><?php the_field('titre_defi') ?></h3>
					<div class="slider_content"><?php the_field('content_defi')?></div>
				</div>
				<div class="poursuite_wrapper">
					<h3 class="slider_content_title"><?php the_field('titre_poursuite') ?></h3>
					<div class="slider_content"><?php the_field('content_poursuite')?></div>
				</div>
				<div class="montre_wrapper">
					<h3 class="slider_content_title"><?php the_field('titre_montre') ?></h3>
					<div class="slider_content"><?php the_field('content_montre')?></div>
				</div>
			</div>
			<div class="slider_click small-12 large-12 columns">
				<ul>
					<li class="li-active" id="li-elegance">Course aux points</li>
					<li id="li-poursuite">Poursuite</li>
					<li id="li-defi">Défi</li>
					<li id="li-free">Free</li>
					<li id="li-montre">Contre la montre</li>
				</ul>
			</div>
	</div>
	<div class="row2" id="produit_preco">
		<div class="small-12 columns">
			<h1><?php the_field('preco_title')?></h1>
		</div>
		<div class="small-12 medium-8 large-8 columns">
			<img src="<?php the_field('preco_img')?>" />
		</div>
		<div class="small-12 medium-4 large-4 columns">
			<?php the_field('preco_content')?>
			<span><a href="/dev/pre-commander/" class="btn">Pré-commander</a></span>
		</div>
	</div>
</div>
</div>
<?php get_footer()?>
