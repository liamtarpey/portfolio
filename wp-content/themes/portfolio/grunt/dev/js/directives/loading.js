
	.directive('loading', ['$http', function($http) {

		return {

			restrict: 'A',

			link: function(scope, ele, attr) {

				scope.isLoading = function() {

					return $http.pendingRequests.length > 0;

				};

				scope.isntLoading = function() {

					return $http.pendingRequests.length == 0;

				}

				scope.$watch(scope.isLoading, function(v) {

					if(v) {

						ele.show();

					} else {

						ele.hide();

					}

				})

				scope.$watch(scope.isntLoading, function(x) {

					if(x) {

						ele.hide();

					} else {

						ele.show();

					}

				})

			}

		}

	}])