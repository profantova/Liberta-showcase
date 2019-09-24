<!doctype html>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
	<head>

		<title><?php wp_title( '' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php // Fix Validation error with <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
				if (isset($_SERVER['HTTP_USER_AGENT']) &&
				    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
				        header('X-UA-Compatible: IE=edge,chrome=1');
			  	?>
		<!-- Icons -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/img/icons/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/img/icons/apple-touch-icon.png" sizes="57x57" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/img/icons/apple-touch-icon.png" sizes="72x72" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/img/icons/apple-touch-icon.png" sizes="76x76" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/img/icons/apple-touch-icon.png" sizes="114x114" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/img/icons/apple-touch-icon.png" sizes="120x120" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/img/icons/apple-touch-icon.png" sizes="144x144" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/img/icons/apple-touch-icon.png" sizes="152x152" />
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/img/icons/apple-touch-icon.png" sizes="180x180" />
    	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap&subset=latin-ext" rel="stylesheet">


		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
