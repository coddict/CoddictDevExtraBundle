
angular.module("app.directives")
    .directive('inputIf', function($parse) {
        return {
            restrict: 'A', // only activate on element attribute
            require: '?ngModel', // get a hold of NgModelController
            link: function(scope, element, attrs, ngModel) {
                if(!ngModel) return; // do nothing if no ng-model
                
                // Listen for change events to enable binding
                element.bind('blur keyup change', function() {
                    scope.$apply(read);
                });
                read(); // initialize
                
                // Write data to the model
                function read() {
                    ngModel.$setViewValue(element.find("input").val());
                }
                
                attrs.$observe("inputIf", function(makeInput){
                    if($parse(makeInput)()){
                        element.html("<input type='text' class='" + (attrs.inputIfClass||'') + "' old-value='" + element.html() + "' value='" + element.html() + "' />")
                    }else if(element.find("input").length){
                        element.html(element.find("input").attr("old-value"));
                    }
                    
                })
                
            }
        };
    });