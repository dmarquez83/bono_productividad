angular.module('accessUsersCtrl', [])

	.controller('accessUsersController', function($scope, $http, $location, server) {
		// loading variable to show the spinning loading icon
		$scope.loading = true;
        var path = $location.absUrl();
        $scope.host = $location.host();
        var res = path.split("/");
        var path_new = res[0] + res[1] ;
        $scope.path = path_new + '//' + res[2] + '/';


        server.getAll(path_new + '/index-access').success(function (data) {
            $scope.accessUsers = data;
            $scope.accessModules =_.groupBy(data, 'modules_id');
            $scope.loading = false;
            $scope.acc_consult=_.pluck(_.where(data, {menu_modules_id : $scope.menu_modules}), 'acc_consult');
            if($scope.acc_consult[0]) $scope.acc_consult=false; else $scope.acc_consult=true;

            $scope.acc_update=_.pluck(_.where(data, {menu_modules_id : $scope.menu_modules}), 'acc_update');
            if($scope.acc_update[0]) $scope.acc_update=false; else $scope.acc_update=true;

            $scope.acc_insert=_.pluck(_.where(data, {menu_modules_id : $scope.menu_modules}), 'acc_insert');
            if($scope.acc_insert[0]) $scope.acc_insert=false; else $scope.acc_insert=true;

            $scope.acc_remove=_.pluck(_.where(data, {menu_modules_id : $scope.menu_modules}), 'acc_remove');
            $scope.acc_remove_list= $scope.acc_remove[0];
            if($scope.acc_remove[0]) $scope.acc_remove=false; else $scope.acc_remove=true;


            $scope.acc_special=_.pluck(_.where(data, {menu_modules_id : $scope.menu_modules}), 'acc_special');
            if($scope.acc_special[0]) $scope.acc_special=false; else $scope.acc_special=true;

            $scope.acc_authorize=_.pluck(_.where(data, {menu_modules_id : $scope.menu_modules}), 'acc_authorize');
            if($scope.acc_authorize[0]) $scope.acc_authorize=false; else $scope.acc_authorize=true;
        });
	});

