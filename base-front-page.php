
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->
<div class="top_banner">
<div class="row">

  <div class=" col-sm-offset-1 col-md-2">
    <ul class="list-inline">
      <li><span class="glyphicon glyphicon-headphones home"></span></li>
      <li><span class="glyphicon glyphicon-music home"></span></li>
    </ul>
   
  </div>
   <div class="col-md-offset-10 col-md-1" id="topcart_right">
    <ul class="list-inline">
      <li><span class="glyphicon glyphicon-headphones home"></span></li>
    </ul>

   </div>
</div> <!-- end row div -->

  </div>  
<div class="jumbotron slide1 full-wrapper hero-image row">
  <div class="col-md-offset-3 col-md-6">
  <a href="http://www.terriblerecordsus.com/index.php?/releases/"> SHOP </a>
</div>
</div>
<div class="slide2">
  <div id="navbar-wrapper" data-spy="affix" data-offset-top="816" >
  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
</div>
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <div class="row">
          <div class="col-md-3 col-md-offset-1" div id="sidebar" >
            <h2> Terrible News </h2>

          </div> <!-- end 4 column row -->
          <div class="col-md-8 row" id="content" >

            <?php query_posts('category=artists&showposts=4'); ?>
              <?php if (!have_posts()) : ?>
            <div class="alert alert-warning">
              <?php _e('Sorry, no results were found.', 'roots'); ?>
            </div>
            <?php get_search_form(); ?>
          <?php endif; ?>

          <?php while (have_posts()) : the_post(); ?>
           <?php if ( has_post_thumbnail() ) : ?>
           <div class="col-md-6">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <div class="fade">
          <?php the_post_thumbnail('medium'); ?>
        </div>
          </a>
          <h3 id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
          <?php the_title(); ?></a></h3>
                  </div>
            <?php endif; ?>
          <?php endwhile; ?>

          </div> <!-- end 6 column div -->

        </div> <!-- end row for main container -->

      </main><!-- /.main -->

      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
</div> <!-- end slide 2-->

<div class="footer homepage_foot">
  <?php get_template_part('templates/footer','homepage'); ?>
</div>
</body>

</html>

<script type="text/javascript">


$(function(){
    // name your elements here
    var stickyElement   = '.sticky',   // the element you want to make sticky
        bottomElement   = '.footer'; // the bottom element where you want the sticky element to stop (usually the footer) 
    // make sure the element exists on the page before trying to initalize
    if($( stickyElement ).length){
        $( stickyElement ).each(function(){
            
            // let's save some messy code in clean variables
            // when should we start affixing? (the amount of pixels to the top from the element)
            var fromTop = $( this ).offset().top, 
                // where is the bottom of the element?
                fromBottom = $( document ).height()-($( this ).offset().top + $( this ).outerHeight()),
                // where should we stop? (the amount of pixels from the top where the bottom element is)
                // also add the outer height mismatch to the height of the element to account for padding and borders
                stopOn = $( document ).height()-( $( bottomElement ).offset().top)+($( this ).outerHeight() - $( this ).height()); 
            // if the element doesn't need to get sticky, then skip it so it won't mess up your layout
            if( (fromBottom-stopOn) > 200 ){
                // let's put a sticky width on the element and assign it to the top
                $( this ).css('width', $( this ).width()).css('top', 0).css('position', '');
                // assign the affix to the element
                $( this ).affix({
                    offset: { 
                        // make it stick where the top pixel of the element is
                        top: fromTop,  
                        // make it stop where the top pixel of the bottom element is
                        bottom: stopOn
                    }
                // when the affix get's called then make sure the position is the default (fixed) and it's at the top
                }).on('affix.bs.affix', function(){ $( this ).css('top', 0).css('position', ''); });
            }
            // trigger the scroll event so it always activates 
            $( window ).trigger('scroll'); 
        }); 
    }
});


/* activate sidebar */
$('#sidebar').affix({
  offset: {
    top: 816
  }
});


/* activate sidebar */
$('#content').affix({
  offset: {
    top: 816

  }
});

$(window).scroll(function() {
    $(".top_banner").css({
    'opacity' : 1-(($(this).scrollTop())/570)
    });          
}); 


$(window).scroll(function() {
    $(".fade").css({
    'opacity' : 1+(($(this).scrollTop())/590)
    });          
}); 

</script>

