angular.module('appService', [])

	.factory('server', function($http) {

		return {
			getAll: function (resource) {
				return $http({
					method: 'GET',
					url: resource
				});
			},
			save: function (resource, data) {
				return $http({
					method: 'POST',
					url: resource,
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(data)
				});
			},
			delete: function (resource, id) {
				return $http({
					method: 'DELETE',
					url: resource + '/' + id
				});
			},
			update: function (resource, data, id) {
				return $http({
					method: 'PUT',
					url: resource + '/' + id,
					data: data
				});
			},
			post: function (resource, data) {
				return $http({
					method: 'POST',
					url: resource,
					data: data
				});
			},
			get: function (resource, id) {
				return $http({
					method: 'GET',
					url: resource + '/' + id
				});
			},
			getByParameter: function (resource, parameter1, parameter2) {
				return $http({
					method: 'GET',
					url: resource + '/' + parameter1 +  '/' + parameter2
				});
			},
			deleteByParameter: function (resource,  parameter1, parameter2) {
				return $http({
					method: 'DELETE',
					url: resource + '/' + parameter1 +  '/' + parameter2
				});
			},
			delete_pr: function (resource, data) {
				return $http({
					method: 'DELETE',
					url: resource,
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(data)
				});
			},
			/*getByParameter: function (resource, parameter, data) {
				return $http({
					method: 'GET',
					url: resource + '/' + data + '?parameter=' + parameter
				});
			},*/
			getColumnsByParameters: function (resource, parameters, columns) {
				return $http({
					method: 'POST',
					url: resource + '/getColumnsByParameters',
					data: {
						parameters: parameters,
						columns: columns
					}
				});
			},
			getByParameterPost: function (resource, parameters) {
				return $http({
					method: 'POST',
					url: resource + '/getByParameterPost',
					data: parameters
				});
			},
			getAllByParameterPostForConsolidation: function (resource, parameters) {
				return $http({
					method: 'POST',
					url: resource + '/getAllByParameterPostForConsolidation',
					data: parameters
				});
			},
			forSelectize: function (resource, parameters) {
				return $http({
					method: 'POST',
					url: resource + '/forSelectize',
					data: parameters
				});
			},
			getByParameters: function (resource, parameters) {
				return $http({
					method: 'POST',
					url: resource + '/searchByParameters',
					data: parameters
				});
			},
			getSpecificData: function (resource, attributes) {
				return $http({
					method: 'POST',
					url: resource + '/specificData',
					data: attributes
				});
			}

		}

	});