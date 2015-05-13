
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

			<div class="left">
				<div ng-include="'/wp-content/themes/portfolio2/views/header.html'"></div>
				<a href="javascript:;" ng-click="showProject()">Rolls</a>
				{{projectVisible}}
				{{projectLoading}}
			</div>

			<div class="right right-col">

				<div class="home-right" ng-class="{active:homeVisible}">derp dee derp</div>

				<span ng-show="projectLoading">...</span>

				<!-- <div class="project-right" ng-class="{active:projectVisible}"></div> -->
	
				<!-- About -->
				<div ng-include="'/wp-content/themes/portfolio2/views/about.html'" 
					 ng-class="{active:projectVisible && projectLoading == false}" ></div>

			</div>

		</main>

		<!-- <div ng-include="'/wp-content/themes/portfolio/ng-views/footer.html'"></div> -->
		<?php wp_footer(); ?>

		<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

	</body>
	
</html>
