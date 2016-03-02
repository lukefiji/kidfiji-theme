<?php
/*
  Template Name: Portfolio Page
*/
?>

<?php get_header(); ?>

<?php

  //// $num_posts = -1;
  //// if ( is_front_page() ) $num_posts = 4;
  // $num_posts = ( is_front_page() ) ? 4 : -1;

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => 30
  );
  $query = new WP_Query( $args );

?>

<div class="container">

  <div id="portfolio" class="headline">PORTFOLIO</div>
  <ul class="portfolio-filters">
    <li class="filter"><a href="#" data-filter="*" class="active">Show All</a></li>
    <li class="filter"><a href="#" data-filter=".web">Web</a></li>
    <li class="filter"><a href="#" data-filter=".graphics">Graphics</a></li>
    <li class="filter"><a href="#" data-filter=".photography">Photography</a></li>
    <li class="filter"><a href="#" data-filter=".video">Video</a></li>
  </ul>

  <div class="portfolio-grid">

    <div class="portfolio-sizer"></div>

    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

    <div class="portfolio-item <?php foreach( get_the_category() as $cat ) { echo $cat->slug . ' '; } ?>">
      <div class="card">
        <div class="card-header"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
        <div class="card-info">
          <div class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
          <div class="card-tags">
              <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
            </div>
        </div>
      </div>
    </div>

    <?php endwhile; endif; ?>

  </div>

</div>

<?php get_footer(); ?>
