<?php
/*
Template Name: Blog Template
*/
?>


<div class="trick_header">
<?php get_template_part('templates/second','header'); ?>
</div>
<div class="contact_main">
<?php while (have_posts()) : the_post(); ?>
	
  <?php get_template_part('templates/page', 'header'); ?>

<?php endwhile; ?>
<?php get_template_part('templates/content', 'blog'); ?>

</div> <!-- end artists main container-->


