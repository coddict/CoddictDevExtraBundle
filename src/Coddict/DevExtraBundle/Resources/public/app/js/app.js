angular.module("app", ["app.services", "app.directives", "app.filters"])
    .constant("baseBundleUrl", "/bundles/coddictdevextra/app")
    
    .config(function($routeProvider, $httpProvider, baseBundleUrl){
        $routeProvider
            .when('/', {templateUrl: baseBundleUrl + '/partials/home.html'})
            .when('/composer/', {templateUrl: baseBundleUrl + '/partials/composer.html'})
            .otherwise({redirectTo: '/'});
            
        $httpProvider.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded; charset=UTF-8";
        $httpProvider.defaults.headers.put["Content-Type"] = "application/x-www-form-urlencoded; charset=UTF-8";
        
    })

angular.module("app.services", [])
angular.module("app.directives", [])
angular.module("app.filters", [])