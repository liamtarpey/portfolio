var app = angular.module('portfolio', ['ngSanitize']);

app.config( [
    '$compileProvider',
    function( $compileProvider ) {  
     
        $compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|chrome-extension|javascript):/);
    }
]);
