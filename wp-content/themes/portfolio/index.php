
<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="portfolio">

	<head>
		<title>Liam Tarpey | Front End Developer</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> ng-controller="loading">

		<div id="page" class="hfeed site">

			<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

			<p>TEST</p>

			<div ng-include="'/wp-content/themes/portfolio/ng-views/header.html'"></div>

			<main class="app-content" role="main">

				<div ng-view view-animations class="main-view"></div>

			</main>

		</div>

		<div ng-include="'/wp-content/themes/portfolio/ng-views/footer.html'"></div>
		<?php wp_footer(); ?>

		<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

	</body>
	
</html>
