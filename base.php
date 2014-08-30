
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
     <ul class="list-inline hide">
                      <a href="https://www.facebook.com/pages/Terrible-Records/120038475702"><li class="icon_fb"></li></a>
                      <a href="https://twitter.com/TerribleRecords"><li class="icon_twitter"></li></a>
                      <a href="http://instagram.com/terriblerecords"><li class="icon_insta"></li></a>
                      <a href="https://www.youtube.com/user/TerribleRecords"><li class="icon_youtube"></li></a>
                      <a href="https://soundcloud.com/terrible-records"><li class="icon_sc"></li></a>

                    </ul>
 

   </div>
</div> <!-- end row div -->

  </div>  <!-- end top posts -->
  <div class="main_header" style="opacity:1;" >
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
    'opacity' : 1+(($(this).scrollTop())/100)
    });          
}); 


$(window).scroll(function() {
    $(".second_header").css({
    'opacity' : 1-(($(this).scrollTop())/80)
    });          
}); 


$(window).scroll(function() {
    $(".top_posts").css({
    'opacity' : 1-(($(this).scrollTop())/70)
    });          
}); 
    


</script>
