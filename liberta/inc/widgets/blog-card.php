<?php
// Template: All Posts Query Loop
// Type: Parial/Query Loop
// Notes:
// Output posts wp_query loop (e.g. all-posts.php)

?>

<div class="row d-flex justify-content-center mb-5">

    <div class="card d-flex flex-sm-column flex-lg-row<?php if ( $count % 2 == 0 ) { echo "-reverse"; } ?>">
        <div class="card-image">
          <img src="<?php echo $post_image; ?>" class="card-img-top" alt="<?php echo $post_image_alt; ?>">
        </div>

        <div class="card-body text-center">

            <div class="post-meta-container d-flex justify-content-center">
                <p class="post-meta-category">Category: <span><?php echo $post_category; ?></span></p>
            </div>

            <h3 class="card-title"><?php echo $post_title; ?></h3>

            <div class="post-meta-container d-flex justify-content-center">
                <p class="post-meta-author"><?php echo $author_name; ?></p>
                <p class="post-meta-date"><?php echo $post_date; ?></p>
            </div>

            <?php if ( has_excerpt() ) { ?>
                <p class="card-text"><?php echo $post_excerpt; ?></p>
            <?php } ?>

            <a href="<?php echo $post_link; ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/misc/arrow.svg" alt="arrow" class="arrow arrow--right"></a>
        </div>

    </div>

</div>
