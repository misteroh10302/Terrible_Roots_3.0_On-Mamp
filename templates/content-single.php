<style type="text/css">

            /* Positioning */
            #box1 { overflow: hidden }
            #box2 { position: relative }
            #box3 { position: absolute; top: 16em;}

            /* Styling */
            #box1 { margin-top: -1em; width: 100%}
            #box2 { padding: 2px; height: 100% }
            #box3 { background: #eef; padding: 2px; width: 100%; height: 450% }


.post_content {
  text-align: center;
}

.post_content p {
  text-align: center;
padding: 0px 12em 0em 12em;

}


@media (max-width: 979px) {
  .post_content p img {
  padding: 0px -12em 0em -12em;

}

  .post_content p {
  text-align: center;
padding: 0px 0em 0em 1.5em;

}

}

.post_content p img {
  padding: 0px 0em 0em 0em;
  width: 100% \9;
  max-width: 100%;
  height: auto;

}



        </style>

<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class(); ?>>
  <div id="box1">
    <div>

<br>
<div id="box2">
  <div id="box3">
  </div>
    <div class="trick_header">
    <?php get_template_part('templates/second','header'); ?>




    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="col-md-12 post_content">

    <div class="entry-content">
      <?php the_content(); ?>

    </div>
  </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
    <div class="back row">
      <div class="col-md-offset-7 col-md-1">
        <a href="http://localhost:8888/wordpress/artists">
      <button type="button" class="btn btn-default">
        Back to Artists</button></a>
    </div>
</div> 
<?php endwhile; ?>




