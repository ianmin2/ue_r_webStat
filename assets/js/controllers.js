var artistControllers = angular.module('artistControllers', ['ngAnimate']);

artistControllers.controller('ListController', ['$scope', '$http',  function( $scope, $http ){

    $http.get("js/data.json").success( 
        function(data){ 
            
            $scope.artists = data; 
            $scope.artistOrder = 'name';
            $scope.numArtists = 15;
            
        });
    
}] );

artistControllers.controller('DetailController', ['$scope', '$http', '$routeParams',  function( $scope, $http, $routeParams ){

    $http.get("js/data.json").success( 
        function(data){ 

            $scope.artists = data; 
           $scope.whichArtist = $routeParams.artistId;
            
            if( $routeParams.artistId > 0 ){
                $scope.prevArtist = Number( $routeParams.artistId ) - 1;
            }else{
                $scope.prevArtist = $scope.artists.length - 1;
            }
            
            if( $routeParams.artistId < $scope.artists.length - 1 ){
                $scope.nextArtist = Number( $routeParams.artistId ) + 1;
            }else{
                $scope.nextArtist = 0;
            }

        });

}] );
