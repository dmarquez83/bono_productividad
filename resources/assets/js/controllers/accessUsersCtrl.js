angular.module('accessUsersCtrl', [])

	.controller('accessUsersController', function($scope, $http, server) {
		// loading variable to show the spinning loading icon
		$scope.loading = true;

        server.getAll('index-access').success(function (data) {
            $scope.accessUsers = data;
            $scope.accessModules =_.groupBy(data, 'modules_id');

            console.log('accessCategory :',$scope.accessModules);

            angular.forEach(($scope.accessModules), function (row) {
              //  console.log('Category :',row);
            });

                $scope.loading = false;
        });

	});

