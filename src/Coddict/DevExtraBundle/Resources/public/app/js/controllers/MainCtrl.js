angular.module("app")
    .controller("MainCtrl", function(baseBundleUrl, $scope){
        $scope.baseBundleUrl = baseBundleUrl;
        $scope.testInput = "testing";
    })