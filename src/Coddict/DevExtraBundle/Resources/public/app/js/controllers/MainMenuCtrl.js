angular.module("app")
    .controller("MainMenuCtrl", function($scope){
        $scope.menuItems = [
            { text: "Home", path: "/", icon: "home" },
            { text: "Composer", path: "/composer/", icon: "music" },
        ]
    })