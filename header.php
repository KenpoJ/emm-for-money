<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emm-blue-underscores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--  ADD LINK TO GOOGLE FONTS HERE -->
	<link href="https://fonts.googleapis.com/css?family=Bitter|Quattrocento+Sans" rel="stylesheet">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php //echo get_template_directory_uri(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'emm-blue-underscores' ); ?></a>

	<header class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand">
				<img src="<?php echo get_template_directory_uri(); ?>/img/EMM-logo-block-white.svg" width="100" height="80" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'container_id' => 'navbarSupportedContent',
					'container_class' => 'collapse navbar-collapse',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'navbar-nav mr-auto',
				) );
			?>
		</div>
	</header>

	<?php
	if(is_page('Home Page')) { ?>

	<div class="jumbotron jumbotron-home">
		<div class="container">
			<h1><span class="large">Welcome to EMM</span><br>The Effortless Money Management Tool</h1>
		</div>
	</div>

	<?php } 

	if(is_page('How Does It Work')) { ?>

	<div class="jumbotron jumbotron-how">
		<div class="container">
			<h1><span class="large">How Does EMM Work?</span></h1>
		</div>
	</div>

	<?php } ?>

	

	<div id="content" class="site-content">
