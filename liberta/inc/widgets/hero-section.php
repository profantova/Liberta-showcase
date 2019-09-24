<?php
// Theme part for Hero Section
$hs_image = get_field('hs_image');
$hs_title = get_field('hs_title');
$hs_subtitle = get_field('hs_subtitle');
$hs_button_link = get_field('hs_button_link');
$hs_button_label = get_field('hs_button_label');

$add_class_secondary = 'hero-section--secondary';
$add_class_right = 'arrow--right';
$add_class_down = 'arrow--down';
?>

<section class="hero-section <?php if ( is_page_template('service-page.php') || is_page_template('contact-page.php') || is_page_template('blog-page.php') ) { echo $add_class_secondary; } ?>" style="background-image: url('<?php echo $hs_image; ?>');">
    <div class="container-fluid container--is-positioned">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-lg-8">

                <div class="hero-section__content">
                    <h1><?php echo $hs_title; ?></h1>
                    <p><?php echo $hs_subtitle; ?></p>
                    <?php if ( !empty($hs_button_label) ) { ?>
                        <a href="<?php echo $hs_button_link; ?>" class="btn btn-primary"><?php echo $hs_button_label; ?></a>
                    <?php } ?>
                </div>

            </div>
        </div>

    </div>

    <div class="row">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/misc/arrow.svg" alt="arrow" class="arrow <?php if ( is_page_template('service-page.php') || is_page_template('contact-page.php') ) {
            echo $add_class_down;
        } else {
            echo $add_class_right;
        } ?>">
    </div>

</section>
