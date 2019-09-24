<header class="w-100">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/logo/logo-liberta.svg" alt="liberta-logo" class="navbar-brand__logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php ni_nav_primary(); ?>
        <!--
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="<?php// echo site_url(); ?>/preklady-sluzby/">Preklady</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php// echo site_url(); ?>/korektury-sluzby/">Korektúry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php// echo site_url(); ?>/tlmocenie-sluzby/">Tlmočenie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php// echo site_url(); ?>/graficke-prace-sluzby/">Grafické práce</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php// echo site_url(); ?>/blog/">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php// echo site_url(); ?>/agentura-liberta/">O nás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php// echo site_url(); ?>/kontakt/">Kontakt</a>
                </li>
            </ul>
        </div>
        -->
    </nav>
</header>
