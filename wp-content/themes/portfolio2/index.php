
<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="portfolio">

	<head>
		<title>Liam Tarpey | Front End Developer</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/portfolio2/style.css">
		<?php wp_head(); ?>
	</head>

	<body ng-controller="main" ng-class="{active:projectLoading}" class="loading">

		<!-- <a class="skip-link screen-reader-text" href="#content">Skip to content</a> -->

		<main class="app-content" role="main" style="min-height:{{screenHeight}}px">

			<a href="javascript:;" ng-click="showHome();" ng-if="projectVisible" class="home-btn">
				<img src="/wp-content/themes/portfolio2/assets/img/home-icon.png" alt="Home Icon"  class="img-full" />
			</a>

			<div class="first-load" ng-class="{hide:!firstLoad}" ng-if="!firstLoadHide">
				<div ng-include="'/wp-content/themes/portfolio2/views/header.html'"></div>
			</div>

			<div ng-class="{active:fadePage}" class="fade-page">

				<div class="left-col" id="left-col">

					<!-- Header -->
					<div ng-include="'/wp-content/themes/portfolio2/views/header.html'"></div>

					<!-- About -->
					<div ng-include="'/wp-content/themes/portfolio2/views/about.html'"></div>

					<!-- Skill list-->
					<div ng-include="'/wp-content/themes/portfolio2/views/skills.html'"></div>
					
					<!-- Project list-->
					<div ng-include="'/wp-content/themes/portfolio2/views/projects.html'"></div>

					<!-- Individual project left -->
					<div ng-include="'/wp-content/themes/portfolio2/views/project-left.html'"></div>

				</div>

			
				<div class="right-col" id="right-col">

					<!-- Individual project right -->
					<div ng-include="'/wp-content/themes/portfolio2/views/project-right.html'"></div>

				</div>
			</div>
		</main>

		<div ng-include="'/wp-content/themes/portfolio2/views/footer.html'"></div>
		<?php wp_footer(); ?>

		<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.min.js"></script>

	</body>
	
</html>
