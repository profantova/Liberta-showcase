<?php

$bsl_content = get_sub_field('block_split_landscape_content');
$bsl_image = get_sub_field('block_split_landscape_image');

 ?>


<div class="row block-split-landscape align-items-center">
    <div class="block-split-landscape__content col-sm-12 col-lg-6">

        <p><?php echo $bsl_content; ?></p>

    </div>

    <div class="block-split-landscape__image col-sm-12 col-lg-6">
        <img src="<?php echo $bsl_image; ?>" alt="">
    </div>
</div>
