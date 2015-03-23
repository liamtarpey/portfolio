	
	.controller('home', ['$scope', '$http', '$sce', '$timeout', 'api', function ($scope, $http, $sce, $timeout, api) {


		$scope.projectUrl  = document.location.href + "?json=1&post_type=projects"
		$scope.aboutUrl    = document.location.href + "?json=1&post_type=about"
		$scope.contactUrl  = document.location.href + "?json=1&post_type=contact"


		// ==============
		// Projects list
		// =============
		api.getData($scope.projectUrl).then(function (data) {

			$scope.projectItems = data.posts

		})

		// ======
		// About 
		// ======
		api.getData($scope.aboutUrl).then(function (data) {

			$scope.about = data.posts

		})

		// ======
		// Contact 
		// ======
		api.getData($scope.contactUrl).then(function (data) {

			$scope.contact = data.posts
			console.log($scope.contact)

		})

	}])


