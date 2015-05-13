
<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="portfolio">

	<head>
		<title>Liam Tarpey | Front End Developer</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/portfolio2/style.css">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<!-- <a class="skip-link screen-reader-text" href="#content">Skip to content</a> -->

		<main class="app-content" role="main" ng-controller="main">

			<div style="background:darkblue;color:white;">
				<pre>Home visible? {{homeVisible}} , Project visible? {{projectVisible}} , Project Loading? {{projectLoading}}</pre>
			</div>

			<div class="left">

				<!-- Header -->
				<div ng-include="'/wp-content/themes/portfolio2/views/header.html'"></div>

				<!-- About -->
				<!-- <div ng-include="'/wp-content/themes/portfolio2/views/about.html'"></div> -->
				
				<!-- Project list-->
				<div ng-include="'/wp-content/themes/portfolio2/views/projects.html'"></div>

				<!-- Individual project left -->
				<div ng-include="'/wp-content/themes/portfolio2/views/project-left.html'"></div>

			</div>

			<div class="right right-col">

				<!-- <div class="home-right" ng-class="{active:homeVisible}">derp dee derp</div> -->

				<!-- Individual project right -->
				<div ng-include="'/wp-content/themes/portfolio2/views/project-right.html'"></div>

			</div>

			<span ng-class="{active:projectLoading}" class="loading">
				<span>...</span>
			</span>

		</main>

		<!-- <div ng-include="'/wp-content/themes/portfolio/ng-views/footer.html'"></div> -->
		<?php wp_footer(); ?>

		<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

	</body>
	
</html>
