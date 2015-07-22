<?php
/*
Template Name: Page contact
*/
get_header(); ?>
<?php get_template_part( 'parts/menu-main' ); ?>
<div class="row contact" id="form_container">
<div class="small-12 large-12 medium-12 columns"  id="form_preco">

 <?php echo do_shortcode('[contact-form-7 id="349" title="contact"]')?>
</div>
</div>


<?php get_footer()?>
