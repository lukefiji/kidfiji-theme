<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="container">
          <h2 class="portfolio-title"><?php the_title(); ?></h2>
          <div class="portfolio-description"><?php the_field('description'); ?></div>
            <hr/>
          <div class="portfolio-image">
            <?php the_post_thumbnail("full"); ?>
          </div>
            <hr/>
          <p class="portfolio-nav">
            <?php previous_post_link(); ?> |
            <a href="<?php bloginfo('url'); ?>/portfolio">Back to Portfolio</a> |
            <?php next_post_link(); ?>
          </p>
        </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>
