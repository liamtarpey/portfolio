

	.config(function($routeProvider, $locationProvider) {

        var path = '/wp-content/themes/portfolio/ng-views/';

		$routeProvider

        .when('/', {
            templateUrl : path + 'home.html',
            controller  : 'home',
            animations  : {
                enter: 'enter-right',
                leave: 'leave-left'
            }
        })

        .when('/projects/:any', {
            templateUrl : path + 'project.html',
            controller  : 'project',
            animations  : {
                enter: 'enter-left',
                leave: 'leave-right'
            }
        })

        .otherwise({
            redirectTo: '/'
        });

        $locationProvider.html5Mode(true);

	})