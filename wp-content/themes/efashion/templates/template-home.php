<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<!-- hero block -->
<section class="heroBlock">
  <div class="heroCarousel">
    <?php 
      $args = array( 'post_type' => 'hero','posts_per_page' => 3,'order' => 'asc' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();

      // get the image url
      $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    ?> 	
    <div class="col" style="background:url('<?php echo $backgroundImg[0]; ?>')">
      <div class="content">
        <h3><span><?php the_title(); ?></span></h3>
        <?php the_content(); ?>
        <a href="#">Shop Now</a>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer(); ?>