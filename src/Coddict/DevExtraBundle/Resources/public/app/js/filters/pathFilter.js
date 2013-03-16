angular.module("app.filters")
    .filter("path", function(){
        return function(input, params){
            return Routing.generate(input, params);
        }
    })