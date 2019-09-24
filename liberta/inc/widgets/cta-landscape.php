<?php

$cta_content = get_sub_field('bcta_content');
$cta_btn_label = get_sub_field('bcta_button_label');
$cta_btn_link = get_sub_field('bcta_button_link');

?>

<div class="row block-cta align-items-center">
    <div class="block-cta__content col-sm-12 col-md-9">
        <p><?php echo $cta_content; ?></p>
    </div>

    <div class="block-cta__btn col-sm-12 col-md-3">
        <a class="btn btn-secondary" href="<?php echo $cta_btn_link; ?>"><?php echo $cta_btn_label; ?></a>
    </div>
</div>
