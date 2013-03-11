angular.module("app")
    .controller("ComposerAddDepCtrl", function($scope, $http){
        
        angular.extend($scope, {
            depName: "",
            depVersion: "",
            waitingResponse: false,
            isSuccess: false,
            isError: false,
            message: "",
            gotSuccess: function(isSuccess, message){
                this.waitingResponse = false;
                this.isSuccess = false;
                this.isError = false;
                
                if(isSuccess){
                    this.isSuccess = true;
                    this.message = message || "";
                }else{
                    this.isError = true;
                    this.message = message || "Unspecified error?";
                }
                
            },
            send: function(event){
                
                var data = $.param({
                    name: this.depName,
                    version: this.depVersion
                });
                
                this.waitingResponse = true;
                $http({
        			url: Routing.generate("coddictdevextra.composer.add-dependency"),
        			data : data,
        			method : 'POST'
        		}).success(function(data){
        		
            		$scope.gotSuccess(true, 
            		  "Dependency " + $scope.depName 
            		      + " version " + $scope.depVersion 
            		      + " has been added to your composer"
            		);
            		$scope.depName = "";
            		$scope.depVersion = "";
            		
            		console.log(data);
        		}).error(function(data){
            		$scope.gotSuccess(false, data.coddictdevextra.message);
        		
            		console.log(data);
        		});
                
            }
        });
        
    })