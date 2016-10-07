angular.module('groupUserCtrl', [])

	.controller('groupUserController', function($scope, $http, server) {
		// object to hold all the data for the new comment form
		$scope.groupuserData = {};
		var profiles_data = [];

		// loading variable to show the spinning loading icon
		$scope.loading = true;

		server.getAll('api/users').success(function (data) {
			$scope.comments = data;
			$scope.loading = false;
		});

		server.getAll('api/users_list').success(function (data) {
			$scope.users = data;
			$scope.loading = false;
		});

		server.getAll('api/group_list').success(function (data) {
			$scope.groups = data;
			$scope.loading = false;
		});

		server.getAll('api/users_profile').success(function (data) {
			profiles_data = data;
		});
		server.getAll('api/groups_user_list').success(function (data) {
			$scope.group_users = [];

			var groups_user_list = _.groupBy(data, 'group_id');

			angular.forEach((groups_user_list), function(row){ //recorre los grupos
				//$scope.group_users.push(row[0].group);
				var group_user_objeto = {};
				var  user = [];

				$scope.profile_data = [];
				user = _.map(
					_.where(data, {'group_id': row[0].group.id}),
					function(person) {
						//console.log(person.user.id,'person');
						var  profile_data = [];
						profile_data = _.map(
							_.where(profiles_data, {'user_id': person.user.id}),
							function(data_profile) {
								return { profile: data_profile};
							}
						);
						return { users: person.user, profile: profile_data[0].profile};
					}
				);
				group_user_objeto = {'group': row[0].group, 'user': user };
				$scope.group_users.push(group_user_objeto);
			});

			$scope.loading = false;
		});


		// function to handle submitting the form
		$scope.submitGroupUser = function() {
			$scope.loading = true;

			// save the comment. pass in comment data from the form
			server.save('api/users', $scope.groupuserData)
				.success(function(data) {
					$scope.groupuserData = {};
					// if successful, we'll need to refresh the comment list
					server.getAll('api/users')
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});

				})
				.error(function(data) {
					console.log(data);
				});
		};

		// function to handle deleting a comment
		$scope.deleteComment = function(id) {
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