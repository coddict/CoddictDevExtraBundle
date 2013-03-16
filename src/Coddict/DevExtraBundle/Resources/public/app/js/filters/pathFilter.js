angular.module("app.filters")
    .filter("path", function(){
        return function(input){
            return Routing.generate(input);
        }
    })