<?php
/*
Template Name: Page préco
*/
get_header(); ?>
<?php get_template_part( 'parts/menu-main' ); ?>
<div class="row" id="form_container">
<div class="small-12 large-6 medium-6 columns"  id="form_preco">
	<h1 class="preco_title"><?php the_field('preco_title')?></h1>
	<div class="text_price_container"><span class="price_text"><?php the_field('price_text')?></span> <span class="price"> <?php the_field('price')?></span></div>
 <?php echo do_shortcode('[contact-form-7 id="234" title="Preco"]')?>
</div>
<div class="small-12 large-6 medium-6 columns" id="form_preco_img">
	<img src="<?php the_field('image_droite')?>" id="img_droite"/>
</div>
</div>
<div class="row fullwidth" id='wrapper_content_preco'>
<div class="small-12 columns">
	<div class="row2">
<div class="small-12 large-6 medium-6 columns">
 <img src="<?php the_field('produit_face')?>" />
</div>
	<div class="small-12 large-6 medium-6 columns">
	<h2 class="title_content_preco"><?php the_field('title_content_preco')?></h2>
	<span class="title2_content_preco"><?php the_field('title2_content_preco')?></span>
	<div class="content_preco"><?php the_field('content_preco')?></div>
	<div class="content_appstore"><?php the_field('content_appstore')?><div>
	<img src="<?php bloginfo('template_url')?>/assets/img/appstore.png" id="appstore"/>
	<img src="<?php bloginfo('template_url')?>/assets/img/googlestore.png" id="googlestore"/>
	</div>
</div>
</div>
</div>
<?php get_footer()?>
