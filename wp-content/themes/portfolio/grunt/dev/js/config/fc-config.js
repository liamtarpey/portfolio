

	.config(function($routeProvider, $locationProvider) {

        var path = '/wp-content/themes/portfolio/ng-views/';

		$routeProvider

        .when('/', {
            templateUrl : path + 'home.html',
            controller  : 'home'
        })

        .when('/projects/:any', {
            templateUrl : path + 'project.html',
            controller  : 'project'
        })

        .otherwise({
            redirectTo: '/'
        });

        $locationProvider.html5Mode(true);

	})