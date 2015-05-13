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

	//==============
	// Show project
	//==============
	$scope.showProject = function() {

		$scope.homeVisible 	  = false;
		$scope.projectLoading = true;
	
		// JSON call
		api.getData(project).then(function(data) {

			$scope.projectLoading = false;
			$scope.project = data.posts;

			$timeout(function(){

				$scope.projectVisible = true;
			},200);
		});
	};


	//===========
	// Show home
	//===========
	$scope.showHome = function() {


	};


	//============
	// Load about
	//============
	api.getData(about).then(function(data) {

		$scope.about = data.posts;
	});
}]);