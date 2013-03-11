angular.module("app.directives")
    .directive("btspModal", function(){
        return {
            link: function(scope, element, attrs) {
                console.log(arguments);
                
                element
                    .remove()
                    .appendTo("body")
                    .modal({show: false});
                
                scope.openModal = function(){
                    element.modal("show");
                }
                
                scope.closeModal = function(){
                    element.modal("hide")
                }
                
            }
        }
    })