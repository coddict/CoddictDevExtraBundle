angular.module("app")
    .directive('autoComplete', function() {
        return {
            restrict: 'A',
            require: "ngModel",
            link: function(scope, elem, attrs, ngModel) {
                elem.parent().addClass("ui-front");
                elem.autocomplete({
                    source: [],
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
                attrs.$observe("autoComplete", function() {
                    elem.autocomplete("option", "source", attrs.autoComplete);
                });
                scope.$on("$destroy", function(){
                    if(elem.is(":ui-autocomplete")){
                        elem.autocomplete( "destroy" );
                    }
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
                
                elem.autocomplete({
                    autoFocus: true,
                    source: [],
                    minLength: 0,
                    appendTo: null,
                    select: function(evt, ui){
                        ngModel.$setViewValue(ui.item.value);
                        scope.$apply();
                    },
                    create: function(){
                        if(elem.is(":focus")){
                            elem.autocomplete("search", elem.val());
                        }
                    }
                }).unbind("focus.autoCompleteSuggest").bind("focus.autoCompleteSuggest", function(){
                    elem.autocomplete("search", elem.val());
                });
                
                attrs.$observe("autoCompleteSuggest", function(value){
                    if(lastRequest){
                        lastRequest.abort();
                        lastRequest = null;
                    }
                    if(value){
                        lastRequest = jQuery.get(value).done(function(data){
                            elem.autocomplete("option", "source", data);
                            if(elem.is(":focus")){
                                elem.autocomplete("search", elem.val());
                            }
                        });
                    }
                });
                scope.$on("$destroy", function(){
                    if(elem.is(":ui-autocomplete")){
                        elem.autocomplete( "destroy" );
                    }
                });
            }
        };
    });