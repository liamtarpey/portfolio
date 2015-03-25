	
	.controller('loading', ['$scope', function ($scope) {

		$scope.isLoading = false
		console.log($scope.isLoading)

		$scope.$on('$routeChangeStart', function(event, next, current) {
  			
			$scope.isLoading = true
			console.log("start: ", $scope.isLoading)

		});

		$scope.$on('$routeChangeSuccess', function(event, next, current) {

			$scope.isLoading = false
			console.log("succes: ", $scope.isLoading)

		});

	}])


