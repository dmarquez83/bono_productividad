angular.module('groupUserService', [])

	.factory('GroupUser', function($http) {

		return {
			get : function() {
				return $http.get('api/users');
			},
			show : function(id) {
				return $http.get('api/users/' + id);
			},
			save : function(commentData) {
				return $http({
					method: 'POST',
					url: 'api/users',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(commentData)
				});
			},
			destroy : function(id) {
				return $http.delete('api/users/' + id);
			}
		}

	});