app.controller('main', ['$scope', 
						'$http', 
						'$sce', 
						'api',
						'$timeout', 
						function ($scope, $http, $sce, api, $timeout) {

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
	$scope.homePageHeight = window.innerHeight;
	$scope.firstLoad      = true;
	$scope.slideBack      = false;
	$scope.logoFadeIn     = false;

	$timeout(function() {

		$scope.logoFadeIn = true;
	},500);

	$timeout(function() {

		$scope.slideBack = true;
	},1000);

	$timeout(function() {

		$scope.firstLoad = false;
	},1800);

	//==============
	// Show project
	//==============
	$scope.showProject = function(projectUrl) {

		$scope.homeVisible 	  = false;
		$scope.projectLoading = true;
	
		// JSON call
		api.getData(projectUrl + "?json=1").then(function(data) {

			console.log(projectUrl);

			$scope.projectLoading = false;
			$scope.project = data.post;
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