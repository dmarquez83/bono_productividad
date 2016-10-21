angular.module('accessUsersCtrl', [])

	.controller('accessUsersController', function($scope, $http, $location, server) {
		// loading variable to show the spinning loading icon
		$scope.loading = true;
        var path = $location.absUrl();
        var res = path.split("/");
        var path_new = res[0] + res[1] ;
        server.getAll(path_new + '/index-access').success(function (data) {
            $scope.accessUsers = data;
            $scope.accessModules =_.groupBy(data, 'modules_id');
                console.log('accessCategory :',$scope.accessModules);
                angular.forEach(($scope.accessModules), function (row) {
                  //  console.log('Category :',row);
                });
            $scope.loading = false;
        });
	});

