angular.module("app.filters")
    .filter("trans", function(){
        return function(input){
            return Translator.get(input);
        }
    })