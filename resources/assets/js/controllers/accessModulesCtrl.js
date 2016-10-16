angular.module('accessModulesCtrl', [])

	.controller('accessModulesController', function($scope, $http, server) {
		// object to hold all the data for the new comment form
		$scope.accessmodulesData = {};
		$scope.type_user = false;
		var profiles_data = [];
		$scope.path_img='../../../../../img/profile/';
		$scope.user_check_data = [];
		$scope.group_check_data = [];
		// loading variable to show the spinning loading icon
		$scope.loading = true;



		function users_list() {
			$scope.loading = true;
			server.getAll('api/users_list').success(function (data) {
				$scope.users = [];
				angular.forEach((data), function (row) { //recorre los grupos
					$scope.profile_data = [];
					var group_users_all = {};
					group_users_all = _.map(
						_.where($scope.group_users_all, {'user_id': row.id}),
						function (group) {
							return {groups: group};
						}
					);
					//console.log('que paso',group_users_all);
					var group_users_objeto = {'user': row, 'group': group_users_all};
					$scope.users.push(group_users_objeto);
				});
				//console.log($scope.users[0].group);
				$scope.loading = false;
			});
		}
		users_list();

		function group_list() {
			$scope.loading = true;
			server.getAll('api/group_list').success(function (data) {
				$scope.groups = data;
				$scope.loading = false;
			});
		}
		group_list();
		//seleccion de usuario

		if ($scope.accessmodulesData.type_user == 'Usuario'){
			$scope.type_user = true;
		}

		$scope.isChecked_user_all = function(){
           var users=[];
			angular.forEach($scope.users, function(value, key) {
				users.push(value.user);
			});
			if ($scope.user_check_data.length === users.length) {
				$scope.user_check_data = [];
			} else if ($scope.user_check_data.length === 0 || $scope.user_check_data.length > 0) {
				$scope.user_check_data = users.slice(0);
			}
		};


		$scope.isChecked = function(id){
			var match = false;
			for(var i=0 ; i < $scope.user_check_data.length; i++) {
				if($scope.user_check_data[i].id == id){
					match = true;
				}
			}
			return match;
		};

		$scope.sync = function(user_check, item){
			if(user_check){
				// add item
				$scope.user_check_data.push(item);
			} else {
				// remove item
				for(var i=0 ; i < $scope.user_check_data.length; i++) {
					if($scope.user_check_data[i].id == item.id){
						$scope.user_check_data.splice(i,1);
					}
				}
			}
		};

		//selecion de grupo

		$scope.isChecked_group_all = function(){
			if ($scope.group_check_data.length === $scope.groups.length) {
				$scope.group_check_data = [];
			} else if ($scope.group_check_data.length === 0 || $scope.group_check_data.length > 0) {
				$scope.group_check_data = $scope.groups.slice(0);
			}
		};

		$scope.isChecked_group = function(id){
			var match = false;
			for(var i=0 ; i < $scope.group_check_data.length; i++) {
				if($scope.group_check_data[i].id == id){
					match = true;
				}
			}
			return match;
		};

		$scope.sync_group = function(group_check, item){
			if(group_check){
				// add item
				$scope.group_check_data.push(item);
			} else {
				// remove item
				for(var i=0 ; i < $scope.group_check_data.length; i++) {
					if($scope.group_check_data[i].id == item.id){
						$scope.group_check_data.splice(i,1);
					}
				}
			}
		};

		//fin grupo



	});