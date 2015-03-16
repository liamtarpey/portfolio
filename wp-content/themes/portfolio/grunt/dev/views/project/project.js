	
	.controller('project', ['$scope', '$http', '$sce', '$timeout', 'api', function ($scope, $http, $sce, $timeout, api) {


		$scope.url = document.location.href + "?json=1"


		// ===============
		// Single Project
		// ===============
		api.getData($scope.url).then(function (data) {

			$scope.project = data.post

		})

	}])


