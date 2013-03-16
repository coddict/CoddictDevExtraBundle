angular.module("app.services")
    .service("ComposerService", function($http, $rootScope){
        var ComposerService = this;
        
        this.dependencies = {};
        this.latestErr = null;
        this.isUpdating = false;
        
        function handleRequest(url, data, method){
            ComposerService.isUpdating = true;
            $rootScope.$broadcast("ComposerService.UpdatingDependencies");
            
            return $http({
                url: url,
                data: data,
                method: method
            }).success(function(data){
                ComposerService.isUpdating = false;
                ComposerService.dependencies = data.dependencies;
                $rootScope.$broadcast("ComposerService.FetchedDependencies");
            }).error(function(data){
                ComposerService.isUpdating = false;
                ComposerService.latestErr = data;
                $rootScope.$broadcast("ComposerService.ErrorComposerService");
            })
            
        }
        
        this.refreshAllDependencies = function(){
            handleRequest(
                Routing.generate("coddictdevextra.composer.get-dependencies"), 
                null, 
                "GET"
            )
        }
        
        this.updateDependency = function(name, newVersion){
            var data = $.param({
                name: name,
                version: newVersion
            });
            
            handleRequest(
                Routing.generate("coddictdevextra.composer.update-dependency"), 
                data, 
                "POST"
            )
        }
        
        this.removeDependency = function(name){
            var data = $.param({
                name: name
            });
            
            handleRequest(
                Routing.generate("coddictdevextra.composer.remove-dependency"), 
                data, 
                "POST"
            )
        }
        
        this.refreshAllDependencies();
        
    })