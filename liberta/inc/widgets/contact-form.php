<section class="section-contact section--large">
    <div class="container-fluid">

        <div class="row block-contact">
            <div class="block-contact__content col-sm-12 col-lg-6">

                <div class="email">
                    <p><strong>E-mail:</strong></p>
                    <a href="mailto:info@agenturaliberta.sk">info@agenturaliberta.sk</a>
                </div>

                <div class="phone">
                    <p><strong>Telefón</strong></p>
                    <p>0900 123 456</p>
                </div>

                <div class="address">
                    <p><strong>Adresa</strong></p>
                    <p>
                        Agentúra Libertá, s. r. o. <br>
                        Južná trieda 4B <br>
                        040 01 Košice – mestská časť Juh <br>
                        Slovensko
                    </p>
                </div>

                <div class="social-icons">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/misc/instagram_icon.svg" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/misc/Twitter_icon.svg" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/misc/LinkedIn_icon.svg" alt="">
                    </a>
                </div>

            </div>

            <div class="block-contact__form col-sm-12 col-lg-6">
                <?php echo do_shortcode( '[contact-form-7 id="96" title="Contact form 1"]' ); ?>
            </div>

        </div>

    </div>

</section>
