	
	.controller('home', ['$scope', '$http', '$sce', '$timeout', 'api', function ($scope, $http, $sce, $timeout, api) {


		$scope.url      = document.location.href + "?json=1&post_type=projects"
		$scope.aboutUrl = document.location.href + "?json=1&post_type=about"


		// ==============
		// Projects list
		// =============
		api.getData($scope.url).then(function (data) {

			$scope.projectItems = data.posts

		})

		// ======
		// About 
		// ======
		api.getData($scope.aboutUrl).then(function (data) {

			$scope.about = data.posts

		})

	}])


