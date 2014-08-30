<?php
/*
Template Name: About Template
*/
?>


<div class="trick_header">
<?php get_template_part('templates/second','header'); ?>
</div>
<div class="contact_main">
<?php while (have_posts()) : the_post(); ?>
	
  <?php get_template_part('templates/page', 'header'); ?>

<?php endwhile; ?>
<?php get_template_part('templates/content', 'about'); ?>

</div> <!-- end artists main container-->

<style>
 .contact_main { background-image: url('/wordpress/wp-content/themes/Terrible_Roots_3.0/Assets/img/about_bg.jpg'); 
            		background-repeat: no-repeat;
            		height:550px;
            		background-size: 85%;
            		background-position: 50%;
            		 width: 100%;
            		 margin-top: -2em;}

            </style>