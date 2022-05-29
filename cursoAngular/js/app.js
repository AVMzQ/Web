var app = angular.module('myApp',[]);
app.controller('mainController', function ($scope){
    $scope.mensaje="Hola AngularJS";
    var pelicula={
        titulo: "Harry potter",
        genero:"Fantasia",
        duracion:120
    };
    $scope.peli=pelicula;
});