var app= angular.module('buscarApp',[]);
app.controller('buscadorController',function($scope,$http){
    $scope.mensaje="Visor GitHub";

    var exito=function(respone){
        $scope.usuario=respone.data;
    }
    var error=function(){
        $scope.error="usuario no encontrado!"
    }
    $scope.buscar=function(usuario){
        $http.get("https://api.github.com/users/"+usuario).then(exito,error);
    }
});