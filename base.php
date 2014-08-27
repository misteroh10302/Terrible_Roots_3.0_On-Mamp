
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

<div class="top_posts">
<div class="row">

  <div class=" col-sm-offset-1 col-md-2">
    <ul class="list-inline">
      <li><span class="glyphicon glyphicon-headphones"></span></li>
      <li><span class="glyphicon glyphicon-music"></span></li>
    </ul>
   
  </div>
   <div class="col-md-offset-7 col-md-1" id="topcart_right">
    <ul class="list-inline">
      <li><span class="glyphicon glyphicon-headphones"></span></li>
    </ul>

   </div>
</div> <!-- end row div -->

  </div>  
  <div class="main_header" style="opacity:0;">
  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
</div>

  <div class="wrap container container-color" role="document">
    <div class="content row">
      <main class="main col-md-12" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->

      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer','homepage'); ?>

</body>
</html>

<style>

@media (max-width: 767px) {
.main_header {
opacity:1 !important;
}

  .second_header {
    display:none;
  }
}
</style>

<script type="text/javascript">


$(window).scroll(function() {
    $(".main_header").css({
    'opacity' : 0+(($(this).scrollTop())/65)
    });          
}); 


$(window).scroll(function() {
    $(".second_header").css({
    'opacity' : 1-(($(this).scrollTop())/65)
    });          
}); 


    


</script>
