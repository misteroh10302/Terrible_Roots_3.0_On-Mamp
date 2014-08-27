
<div class="artists_content row">

<div class="col-md-12 row" id="content" >
  

            <?php query_posts('category=artists'); ?>
            
              <?php if (!have_posts()) : ?>
            <div class="alert alert-warning">
              <?php _e('Sorry, no results were found.', 'roots'); ?>
            </div>
            <?php get_search_form(); ?>
          <?php endif; ?>

          <?php while (have_posts()) : the_post(); ?>

           <?php if ( has_post_thumbnail() ) : ?>
           <div class="col-md-4">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail('medium'); ?>
          </a>
          <h3 id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
          <?php the_title(); ?></a></h3>
                  </div>
            <?php endif; ?>
          <?php endwhile; ?>

          </div> <!-- end 6 column div -->

</div> <!-- end artists content div -->

<script type="text/javascript">
  $(init);

function init() {
    $(".container-color").css("background-color", "rgb(239, 239, 255)");
    }

</script>