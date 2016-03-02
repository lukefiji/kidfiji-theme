<?php get_header(); ?>

<div class="section">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="headline" style="text-transform: uppercase"><?php the_title(); ?></div>
      <div class="page-text"><?php the_content(); ?></div>

    <?php endwhile; else : ?>

    	<p><?php _e( 'Sorry, no pages found.' ); ?></p>

    <?php endif; ?>
</section>

<?php get_footer(); ?>
