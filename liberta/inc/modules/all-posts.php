<?php
// prepare content

$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

$post_args = array(
    'post_type' => 'post',
    'posts_per_page' => 9,
    'order_by' => 'date',
    'paged' => $paged
  );

$post_query = new WP_Query( $post_args );

?>

<?php if ( $post_query->have_posts() ) : ?>

<?php

  $count          = 1;

  // Output posts
  while ( $post_query->have_posts() ) : $post_query->the_post();

      // Get content
      $post_image_array   = wp_get_attachment_image_src( get_post_thumbnail_id(), 'Large' );
      $post_image         = $post_image_array['0'];
      $post_image_alt           = get_post_meta(get_post_thumbnail_id(),'_wp_attachment_image_alt', true);
      $post_title         = get_the_title();
      $post_link          = get_the_permalink();
      $categories 		  = get_the_category();
      $post_category      = $categories[0]->name;
      $post_date          = get_post_time('d/m/y', true);
      $author_name        = get_the_author();
      $post_excerpt       = get_the_excerpt();

?>

<?php include( locate_template( 'inc/widgets/blog-card.php' ) );?>

<?php

    $count++;

    wp_reset_postdata();

    endwhile;

?>

<?php endif; ?>

<div class="row d-flex justify-content-center pagination">
    <?php
            echo paginate_links( array(
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'total'        => $post_query->max_num_pages,
                'current'      => $paged,
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 2,
                'mid_size'     => 1,
                'prev_next'    => true,
                'prev_text'    => sprintf( '<i></i> %1$s', __( 'Previous', 'text-domain' ) ),
                'next_text'    => sprintf( '%1$s <i></i>', __( 'Next', 'text-domain' ) ),
                'add_args'     => false,
                'add_fragment' => '',
            ) );
    ?>
</div>
