<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>

  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <?php get_post_meta(get_the_ID(), 'price_key', true); ?>
  </div>
</article>
