angular.module("app.directives")
    .directive("btspModal", function(){
        return {
            link: function(scope, element, attrs) {
                element
                    .remove()
                    .appendTo("body")
                    .modal({show: false});
                console.log("mhm")
                scope.openModal = function(){
                    element.modal("show");
                }
                
                scope.closeModal = function(){
                    element.modal("hide")
                }
                
                scope.$on("$destroy", function(){
                    element.remove();
                    console.log("destroying", element.modal("hide"));
                })
                
            }
        }
    })