angular.module("app")
    .directive('autoComplete', function() {
        return {
            restrict: 'A',
            require: "ngModel",
            link: function(scope, elem, attrs, ngModel) {
                elem.parent().addClass("ui-front");
                attrs.$observe("autoComplete", function() {
                    elem.autocomplete({
                        source: attrs.autoComplete,
                        minLength: 2,
                        appendTo: null,
                        search: function(){
                            if(attrs.autoCompleteEmit){
                                scope.$emit(attrs.autoCompleteEmit + ".search");
                                scope.$apply();
                            }
                        },
                        response: function(){
                            if(attrs.autoCompleteEmit){
                                scope.$emit(attrs.autoCompleteEmit + ".response");
                                scope.$apply();
                            }
                        },
                        select: function(evt, ui){
                            ngModel.$setViewValue(ui.item.value);
                            scope.$apply();
                        }
                    });
                });
                scope.$on("$destroy", function(){
                    elem.autocomplete( "destroy" );
                });
            }
        };
    })
    .directive('autoCompleteSuggest', function($http) {
        return {
            restrict: 'A',
            require: "ngModel",
            link: function(scope, elem, attrs, ngModel) {
                elem.parent().addClass("ui-front");
                var lastRequest = null;
                
                attrs.$observe("autoCompleteSuggest", function(value){
                    if(lastRequest){
                        lastRequest.abort();
                    }
                
                    lastRequest = jQuery.get(value).done(function(data){
                        
                        elem.autocomplete({
                            autoFocus: true,
                            source: data,
                            minLength: 0,
                            appendTo: null,
                            select: function(evt, ui){
                                ngModel.$setViewValue(ui.item.value);
                                scope.$apply();
                            }
                        });
                    });
                });
                scope.$on("$destroy", function(){
                    elem.autocomplete( "destroy" );
                });
            }
        };
    });