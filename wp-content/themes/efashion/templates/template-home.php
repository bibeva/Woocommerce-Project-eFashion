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

<!-- product category block -->
<?php

  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;       
        echo '<br /><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';

        $args2 = array(
                'taxonomy'     => $taxonomy,
                'child_of'     => 0,
                'parent'       => $category_id,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty
        );
        $sub_cats = get_categories( $args2 );
        if($sub_cats) {
            foreach($sub_cats as $sub_category) {
                echo  $sub_category->name ;
            }   
        }
    }       
}
?>

<?php get_footer(); ?>