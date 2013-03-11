angular.module("app.services")
    .service("ComposerService", function($http, $rootScope){
        this.dependencies = {};
        this.latestErr = null;
        
        var ComposerService = this;
        
        $http.get(Routing.generate("coddictdevextra.composer.get-dependencies"))
            .success(function(data){
                ComposerService.dependencies = data.dependencies;
                $rootScope.$broadcast("ComposerService.FetchedDependencies");
            })
            .error(function(data){
                ComposerService.latestErr = data;
                $rootScope.$broadcast("ComposerService.ErrorFetchingDependencies");
            })
        
    })