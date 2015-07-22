<?php
/*
Template Name: Page Home
*/
get_header(); ?>
<span id="nav_intern">
	<ul>
		<li class="bullet-nav"data-position="1"><span class="bullet-text">Ariew</span><span class="content-nav"></span><i class="fa fa-circle"></i></li>
		<li class="bullet-nav"data-position="2"><span class="bullet-text">Sensations</span><span class="content-nav"></span><i class="fa fa-circle"></i></li>
		<li class="bullet-nav"data-position="3"><span class="bullet-text">Polyvalence</span><span class="content-nav"></span><i class="fa fa-circle"></i></li>
		<li class="bullet-nav"data-position="4"><span class="bullet-text vision">Nouvelle vision</span><span class="content-nav"></span><i class="fa fa-circle"></i></li>
		<li class="bullet-nav"data-position="5"><span class="bullet-text avecvous">Avec vous</span><span class="content-nav"></span><i class="fa fa-circle"></i></li>
		<li class="bullet-nav"data-position="6"><span class="bullet-text">Prochainement</span><span class="content-nav"></span><i class="fa fa-circle"></i></li>
	</ul>
</span>
<div class="row fullwidth">
	<div class="small-12 large-12 columns" role="main" id="home_bloc_intro" class="cd-section visible" style="background-image:url(<?php the_field('background-intro')?>)">
		<div id="logo_container"><img src="<?php the_field('logo')?>" alt='Logo Ariew'/></div>
		<div id="text_intro_container"><h2><?php the_field('titrebloc_intro')?></h2></div>
		<span class="calltoaction_text"><?php the_field('calltoaction_text') ?></span>
		<img src="<?php the_field('arrow')?>" id="arrow"/>
	</div>

	<div class="small-12 large-12 columns" id="home_bloc_2" class="cd-section" style="background-image:url(<?php the_field('background-2')?>)">
		<?php get_template_part( 'parts/menu-main' ); ?>
		<div class="bloc_content" id="bloc_2_container">
			<h2><?php the_field('titre_bloc_2')?></h2>
		</div>
	</div>
	<div class="small-12 large-12 columns" id="home_bloc_3" class="cd-section" style="background-image:url(<?php the_field('background-3')?>)">
		<div class="bloc_content3">
			<h2 class="bloc_3_title" id="titre_bloc_3"><?php the_field('titre_bloc_3')?></h2>
			<?php the_field('texte_bloc_3')?>
		</div>
	</div>
	<div class="small-12 large-12 columns" id="home_bloc_4" class="cd-section" style="background-image:url(<?php the_field('background-4')?>)">
		<div class="bloc_content4">
			<h2><?php the_field('titre_bloc_4')?></h2>
			<?php the_field('text_bloc_4')?>
		</div>
	</div>
	<div class="small-12 large-12 columns" id="home_bloc_5" class="cd-section" style="background-image:url(<?php the_field('background-5')?>)">
		<img src="<?php bloginfo('template_url')?>/assets/img/depassement.png" alt="pictogramme_depassement" id="depassement"/>
		<img src="<?php bloginfo('template_url')?>/assets/img/plaisir.png" alt="pictogramme_plaisir" id="plaisir"/>
		<img src="<?php bloginfo('template_url')?>/assets/img/commu.png" alt="pictogramme_communaute" id="communaute"/>
		<div class="bloc_content5">
			<div id="details1"><h2><?php the_field('details_1_title')?></h2><?php the_field('details_1')?></div>
			<div id="details2"><h2><?php the_field('details_2_title')?></h2><?php the_field('details_2')?></div>
			<div id="details3"><h2><?php the_field('details_3_title')?></h2><?php the_field('details_3')?></div>
		</div>
		<div class="bloc_content5_accordion">
		<ul class="accordion" data-accordion>
		  <li class="accordion-navigation">
		    <a href="#panel1a">Dépassement<i class="fa fa-plus"></i></a>
		    <div id="panel1a" class="content">
		    	<?php the_field('details_1_title')?>
		    	<?php the_field('details_1')?>
		     </div>
		  </li>
		  <li class="accordion-navigation">
		    <a href="#panel2a">Plaisir<i class="fa fa-plus"></i></a>
		    <div id="panel2a" class="content">
		    	<?php the_field('details_2_title')?>
		    	<?php the_field('details_2')?>
		     </div>
		  </li>
		  <li class="accordion-navigation">
		    <a href="#panel3a">Communauté<i class="fa fa-plus"></i></a>
		    <div id="panel3a" class="content">
		    	<?php the_field('details_3_title')?>
		    	<?php the_field('details_3')?>
		      </div>
		  </li>
		</ul>
		</div>
	</div>
	<div class="small-12 large-12 columns" id="home_bloc_6" class="cd-section" style="background-image:url(<?php the_field('background-6')?>)">
		<div class="row2" id="first-row2">
			<h2><?php the_field('titre_produit')?></h2>
			<div class="small-12 medium-6 large-6 columns">
				<img src="<?php the_field('produit')?>" />
			</div>
			<div class="small-12 medium-6 large-6 columns">
				<?php the_field('texte_produit')?>
				<span><a href="/dev/pre-commander/" class="btn">Pré-commander le masque</a></span>
			</div>
		</div>
	</div>

</div>
<?php get_footer()?>
