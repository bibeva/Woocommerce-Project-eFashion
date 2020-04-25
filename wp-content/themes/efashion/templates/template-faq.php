<?php
/*
Template Name: FAQs
*/

get_header(); ?>

<!-- hero block -->
<section class="block openClose">
  <div class="container">
    <header class="entry-header  header-footer-group">
      <div class="entry-header-inner section-inner medium">
        <h1 class="entry-title">Faq</h1>
      </div>
    </header>
    <?php 
      $args = array( 'post_type' => 'faqs','posts_per_page' =>  '20' );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?> 	
    <div class="holder">
      <h3><?php the_title(); ?></h3>
      <div class="content"><?php the_content(); ?></div>
    </div>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer(); ?>