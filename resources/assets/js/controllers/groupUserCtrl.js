angular.module('groupUserCtrl', [])

	.controller('groupUserController', function($scope, $http, server) {
		// object to hold all the data for the new comment form
		$scope.groupuserData = {};
		var profiles_data = [];
		$scope.path_img='../../../../../img/profile/';
		$scope.user_check_data = [];
		$scope.group_check_data = [];
		// loading variable to show the spinning loading icon
		$scope.loading = true;

		server.getAll('api/users_profile').success(function (data) {
			profiles_data = data;
		});
		function groups_user_list() {
			$scope.loading = true;
			server.getAll('api/groups_user_list').success(function (data) {
				$scope.group_users = [];
				$scope.group_users_all = data;
				var groups_user_list = _.groupBy(data, 'group_id');

				angular.forEach((groups_user_list), function (row) { //recorre los grupos
					//$scope.group_users.push(row[0].group);
					var group_user_objeto = {};
					var user = [];
					console.log('aqui id',row.id);
					$scope.profile_data = [];
					user = _.map(
						_.where(data, {'group_id': row[0].group.id}),
						function (person) {
							//console.log(person.user.id,'person');
							var profile_data = {};
							profile_data = _.map(
								_.where(profiles_data, {'user_id': person.user.id}),
								function (data_profile) {
									return {profile: data_profile};
								}
							);
							//return { users: person.user, profile: profile_data[0].profile};
							return {users: person.user, profile: profile_data};
						}
					);
					group_user_objeto = {'group': row[0].group, 'user': user};
					$scope.group_users.push(group_user_objeto);
				});
				$scope.loading = false;
			});
		}
		groups_user_list();
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


		$scope.to_assign = function() {
			$scope.loading = true;
			angular.forEach($scope.group_check_data, function(value_group) {
				angular.forEach($scope.user_check_data, function(value_user) {
					var groupuserData = {'user_id':value_user.id, 'group_id': value_group.id };
					server.getByParameter('api', value_user.id, value_group.id)
					.success(function(data) {
							//console.log(data.success,' success ',value_user.id, ' group_id: ', value_group.id);
							if(data.success){
								server.save('api/users', groupuserData)
									.success(function(data) {
										console.log('Se registraron los datos user_id:',value_user.id, ' group_id: ', value_group.id);
									})
									.error(function(data) {
										console.log('error de registro');
									});
								users_list();
								group_list();
								groups_user_list();
								$scope.user_check_data = [];
								$scope.group_check_data = [];
								$scope.loading = false;
							}else{
								console.log('ya se encuentra registrado los datos user_id:',value_user.id, ' group_id: ', value_group.id);
							}
					});
				});
			});

		};

		// function to handle deleting a comment
		$scope.delete_user_group = function(user_id,group_id) {
			$scope.loading = true;
			server.delete('api/users',id)
				.success(function(data) {

					// if successful, we'll need to refresh the comment list
					server.getAll('api/users')
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});

				});
		};

	});