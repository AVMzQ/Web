app.controller('autosController',function($scope,autosService){
    autosService.getAutos(function(response){
        $scope.autos = response.data;
    });
});