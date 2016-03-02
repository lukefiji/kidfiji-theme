<?php

  // $num_posts = -1;
  // if ( is_front_page() ) $num_posts = 4;
  $num_posts = ( is_front_page() ) ? 4 : -1;

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

?>

<section class="container">

  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large') ?></a>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>
