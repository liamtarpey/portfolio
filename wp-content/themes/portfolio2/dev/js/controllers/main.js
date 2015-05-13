app.controller('main', ['$scope', 
						'$http', 
						'$sce', 
						'api',
						'$timeout', 
						'$location',
						function ($scope, $http, $sce, api, $timeout, $location) {

	// Urls
	var location    = document.location.href,
		postType    = "?json=1&post_type=",
		project     = location + postType + "projects",
		about       = location + postType + "about",
		languages   = location + postType + 'languages',
		contact     = location + postType + "contact";


	// Default scope Vars
	$scope.homeVisible 	  = true;
	$scope.projectVisible = false;
	$scope.projectLoading = false;
	$scope.firstLoad      = true;
	$scope.slideBack      = false;
	$scope.logoFadeIn     = false;
	$scope.fadePage       = false;
	$scope.absoluteHome   = false;
	$scope.absoluteProj   = true;

	$scope.$watch(function() {
		$scope.homePageHeight = window.innerHeight;
	});


	//====================
	// Timeout animations
	//====================
	$timeout(function() {
		$scope.logoFadeIn = true;
	},500);

	$timeout(function() {
		$scope.slideBack = true;
	},1000);

	$timeout(function() {
		$scope.fadePage = true;
	},1650);

	$timeout(function() {
		$scope.firstLoad = false;
	},1800);

	$timeout(function() {
		$scope.firstLoadHide = true;
	},2500);


	//==============
	// Show project
	//==============
	$scope.showProject = function(projectUrl, route, slug) {

		if(route == "home") {

			$scope.homeVisible 	  = false;
			$scope.projectLoading = true;
			$location.path("/projects/" + slug);

			$timeout(function() {
				$scope.absoluteHome = true;
				$scope.absoluteProj = false;
			},400);

		} else {

			var newSlug = slug.replace(location, "");
			$location.path(newSlug);

			$scope.projectLoading = true;
			$scope.projectVisible = false;

			$timeout(function() {
				$scope.absoluteProj = false;
			},400);
		}
	
		// JSON call
		api.getData(projectUrl + "?json=1").then(function(data) {

			$scope.projectLoading = false;
			$scope.project        = data.post;
			$scope.prev           = data.next_url;
			$scope.next           = data.previous_url;

			console.log($scope.project)

			$timeout(function(){
				$scope.projectVisible = true;
			},200);
		});
	};


	//===========
	// Show home
	//===========
	$scope.showHome = function() {

		$scope.projectLoading = true;
		$scope.projectVisible = false;
		$location.path(""); // Remove location path

		$timeout(function() {
			$scope.absoluteHome = false;
			$scope.absoluteProj = true;
		},400);

		$timeout(function() {

			$scope.projectLoading = false;
			$scope.homeVisible 	  = true;
		},600);
	};


	//===================
	// Load project list
	//===================
	api.getData(project).then(function(data) {

		$scope.projectItems = data.posts;
	});


	//============
	// Load about
	//============
	api.getData(about).then(function(data) {

		$scope.about = data.posts;
	});
}]);