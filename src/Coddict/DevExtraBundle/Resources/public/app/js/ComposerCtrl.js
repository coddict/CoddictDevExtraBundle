angular.module("app")
    .controller("ComposerCtrl", function($scope, ComposerService){
        $scope.dependencies = ComposerService.dependencies;
        
        $scope.errorMsg = "yay"
        $scope.isUpdating = ComposerService.isUpdating;
        
        $scope.editingDep = {};
        
        $scope.$on("ComposerService.FetchedDependencies", function(){
            $scope.isUpdating = ComposerService.isUpdating;
            $scope.dependencies = ComposerService.dependencies;
        });
        
        $scope.$on("ComposerService.ErrorComposerService", function(){
            $scope.isUpdating = ComposerService.isUpdating;
            $scope.errorMsg = ComposerService.latestErr.coddictdevextra.message;
            $scope.openModal();
        });
        
        $scope.$on("ComposerService.UpdatingDependencies", function(){
            $scope.isUpdating = ComposerService.isUpdating;
        });
        
        $scope.noDependencies = function(){
            return jQuery.isEmptyObject($scope.dependencies);
        }
        
        $scope.refreshAllDependencies = function(){
            ComposerService.refreshAllDependencies();
        }
        
        $scope.isEditing = function(name){
            return $scope.editingDep.name === name;
        }
        
        $scope.toggleEditDep = function(name, version){
            if($scope.editingDep.name === name){
                ComposerService.updateDependency($scope.editingDep.name, $scope.editingDep.newVersion)
                $scope.editingDep = {};
            }else{
                $scope.editingDep = {
                    name: name,
                    newVersion: version
                }
            }
        }
        
        $scope.removeDep = function(name){
            ComposerService.removeDependency(name);
        }
        
    })