<?php
/*
Template Name: Homepage
*/

get_header(); ?>

<!-- hero block -->
<section class="heroBlock">
  <?php 
    $args = array( 'post_type' => 'hero','order' => 'asc' );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();

    // get the image url
    $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
  ?> 	
  <div class="holder" style="background:url('<?php echo $backgroundImg[0]; ?>')">
    <div class="container">
      <div class="content">
        <h3><span><?php the_title(); ?></span></h3>
        <?php the_content(); ?>
        <a href="#" class="btn">Shop Now</a>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
</section>

<!-- new arrivals block -->
<section class="block">
  <div class="container">
    <div class="titleHolder">
      <h2><span>New Arrivals</span></h2>
      <p>Thousands of items added daily</p>
    </div>
    <?php echo do_shortcode('[recent_products]'); ?>
  </div>
</section>

<!-- product categories block -->
<section class="block productCategories">
  <div class="container">
    <div class="threeCols">
      <?php
        $taxonomyName = "product_cat";
        $prod_categories = get_terms($taxonomyName, array(
          'orderby'=> 'name',
          'order' => 'ASC',
          'hide_empty' => 1
        ));  
      
        foreach( $prod_categories as $prod_cat ) :
          if ( $prod_cat->parent != 0 )
            continue;
            $cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
            $cat_thumb_url = wp_get_attachment_image_src( $cat_thumb_id, 'thumbnail-size' )[0];
            $term_link = get_term_link( $prod_cat, 'product_cat' );
          ?>
          <div class="col">
            <a href="<?php echo $term_link; ?>"> 
              <div class="image" style="background: url('<?php echo $cat_thumb_url; ?>');">
                <h3><?php echo $prod_cat->name; ?></h3>
              </div>
            </a> 
          </div>
        <?php endforeach; 
        wp_reset_query(); 
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>