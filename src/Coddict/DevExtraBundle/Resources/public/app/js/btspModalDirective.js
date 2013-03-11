angular.module("app.directives")
    .directive("btspModal", function(){
        console.log("meh")
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
                
                /*
                // Title element
                var title = angular.element(element.children()[0]),
                    // Opened / closed state
                    opened = true;
         
                // Clicking on title should open/close the zippy
                title.bind('click', toggle);
         
                // Toggle the closed/opened state
                function toggle() {
                  opened = !opened;
                  element.removeClass(opened ? 'closed' : 'opened');
                  element.addClass(opened ? 'opened' : 'closed');
                }
         
                // initialize the zippy
                toggle();*/
            }
        }
    })