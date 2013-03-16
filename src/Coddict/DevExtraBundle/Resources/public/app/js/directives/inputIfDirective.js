
angular.module("app.directives")
    .directive('inputIf', function($parse) {
        return {
            restrict: 'A', // only activate on element attribute
            require: '?ngModel', // get a hold of NgModelController,
            scope: {
                "inputIf": "=",
                "inputIfClass": "@",
                "inputIfSuggest": "@",
                "inputIfModel": "="
            },
            transclude: true,
            template: [
                "<div>",
                    "<input type='text' ",
                        "ng-model='inputIfModel' ",
                        "auto-complete-suggest='{{inputIfSuggest}}' ",
                        "ng-show='inputIf' ",
                        "class='{{inputIfClass}}' ",
                    "/>",
                    "<span ng-show='!inputIf' ng-transclude></span>",
                "</div>"
            ].join(""),
        };
    });