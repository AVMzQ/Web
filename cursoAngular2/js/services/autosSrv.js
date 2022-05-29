app.service("autosService",function($http){
    this.getAutos = function(callback){
        $http.get('../js/models/autos.json').then(callback);
    }
});