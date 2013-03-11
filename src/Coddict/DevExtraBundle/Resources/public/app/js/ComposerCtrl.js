angular.module("app")
    .controller("ComposerCtrl", function($scope, ComposerService){
        $scope.dependencies = ComposerService.dependencies;
        
        $scope.errorMsg = "yay"
        
        $scope.$on("ComposerService.FetchedDependencies", function(){
            $scope.dependencies = ComposerService.dependencies;
        });
        
        $scope.$on("ComposerService.ErrorFetchingDependencies", function(){
            $scope.errorMsg = ComposerService.latestErr.coddictdevextra.message;
            $scope.openModal();
        })
        
        $scope.noDependencies = function(){
            return jQuery.isEmptyObject($scope.dependencies);
        }
        
    })