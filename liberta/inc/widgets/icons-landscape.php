<?php

$bil_title = get_sub_field('bil_section_title');

?>

<!-- Section Title -->
<div class="row">
    <h3 class="section-title section-title--small"><?php echo $bil_title ?></h3>
</div>

<!-- Repeater block -->
<div class="row block-icons-landscape justify-content-between">

    <?php if( have_rows('icons_block') ): ?>

        <?php while( have_rows('icons_block') ): the_row();

        		// vars
        		$bil_image = get_sub_field('ib_image');
        		$bil_content = get_sub_field('ib_content');

        		?>

    <div class="block-icons-landscape__box text-center">
        <img src="<?php echo $bil_image; ?>" alt="">
        <p><?php echo $bil_content; ?></p>
    </div>

        <?php endwhile; ?>

    <?php endif; ?>

</div>
