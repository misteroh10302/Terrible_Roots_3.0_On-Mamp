<?php
/*
Template Name: Artist Template
*/
?>


<div class="trick_header">
<?php get_template_part('templates/second','header'); ?>
</div>
<div class="artists_main">
<?php while (have_posts()) : the_post(); ?>
	
  <?php get_template_part('templates/page', 'header'); ?>

<?php endwhile; ?>
<?php get_template_part('templates/content', 'artist'); ?>

</div> <!-- end artists main container-->

