var myApp = angular.module('ueab-survey', [ 'ngRoute', 'artistControllers' ] );

myApp.config( [ '$routeProvider', function( $routeProvider ){
    
    $routeProvider.when('/list', {
        
        templateUrl: 'partials/lists.html',
        controller: 'ListController'
        
    }).when('/details/:artistId',{ 
        
        templateUrl: 'partials/details.html',
        controller: 'DetailController' 
        
    }).otherwise({ 
        
        redirectTo: '/list'
        
    });
    
}]);