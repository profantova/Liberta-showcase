<?php
// Template:        Page Blocks
// Notes:
// ACF Flexible Content Blocks used for bulding up pages of content
?>

<?php

// check if the flexible content field has rows of data
if( have_rows('page_blocks') ):

    $block_count = 1;

    // loop through the rows of data
    while ( have_rows('page_blocks') ) : the_row(); ?>

    <!-- block landscape split -->
    <?php if( get_row_layout() == 'block_split_landscape' ): ?>

    <section class="section-service section--large">
        <div class="container-fluid">

            <?php include( locate_template( 'inc/widgets/split-landscape.php' ) );?>

        </div>
    </section>

    <!-- block landscape list -->
    <?php elseif( get_row_layout() == 'block_list_landscape' ): ?>

        <section class="section-list section--small">
            <div class="container-fluid">

            <?php include( locate_template( 'inc/widgets/list-landscape.php' ) );?>

            </div>
        </section>

    <!-- block icons -->
    <?php elseif( get_row_layout() == 'block_icons_landscape' ): ?>

        <section class="section-icons section--small" style="background-color: #6e6f6b;">
            <div class="container-fluid">

            <?php include( locate_template( 'inc/widgets/icons-landscape.php' ) );?>

            </div>
        </section>

    <!-- block cta -->
    <?php elseif( get_row_layout() == 'block_cta' ): ?>

        <section class="section-cta section--large">
            <div class="container-fluid">

            <?php include( locate_template( 'inc/widgets/cta-landscape.php' ) );?>

            </div>
        </section>

    <?php endif; ?>

        <?php $block_count++; ?>

    <?php endwhile; ?>

<?php else :

    // no layouts found

endif;

?>
