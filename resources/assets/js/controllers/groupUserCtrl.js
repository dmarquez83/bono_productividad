angular.module('groupUserCtrl', [])

	.controller('groupUserController', function($scope, $http, server) {
		// object to hold all the data for the new comment form
		$scope.groupuserData = {};

		// loading variable to show the spinning loading icon
		$scope.loading = true;

		server.getAll('api/users').success(function (data) {
			$scope.comments = data;
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