var app = angular.module('portfolio', ['ngSanitize', 'ngRoute', 'ngTouch', 'duScroll']);

app.config( [
    '$compileProvider',
    '$locationProvider',
    function( $compileProvider, $locationProvider ) {  
     
        $compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|chrome-extension|javascript):/);
        
        $locationProvider.html5Mode({
		  enabled: true,
		  requireBase: false
		});
    }
]);
