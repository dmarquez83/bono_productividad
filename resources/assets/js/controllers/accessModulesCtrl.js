angular.module('accessModulesCtrl', [])

	.controller('accessModulesController', function($scope, $http, server) {
		// object to hold all the data for the new comment form
		$scope.accessmodulesData = {};
		$scope.type_user = false;
		$scope.type_group = false;
		$scope.accessData = [];
		// loading variable to show the spinning loading icon
		$scope.loading = true;

		function users_list() {
			$scope.loading = true;
			server.getAll('api/users_list').success(function (data) {
				$scope.users = data ;
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

		function companies_list() {
			$scope.loading = true;
			server.getAll('api/companies_list').success(function (data) {
				$scope.companies = data;
				$scope.loading = false;
			});
		}
		companies_list();

		function menu_modules_list() {
			$scope.loading = true;
			server.getAll('api/menu_modules_list').success(function (data) {
				$scope.menuModules = data;
				$scope.loading = false;
			});
		}
		menu_modules_list();
		//seleccion de usuario

		$scope.show_type_user = function(){
			if ($scope.accessmodulesData.type_user == 'Usuario'){
				$scope.type_user = true;
				$scope.type_group = false;
			}else{
				if ($scope.accessmodulesData.type_user == 'Grupo'){
					$scope.type_user = false;
					$scope.type_group = true;
				}else{
					$scope.type_user = false;
					$scope.type_group = false;
				}
			}
		};

		$scope.all_companies_false = function(){
			$scope.accessmodulesData.all_companies= false;
		};

		$scope.all_companies = function(){
			$scope.accessmodulesData.company= null;
		};

		$scope.to_insert = function(){
			var preparando_data= [];

			if($scope.accessmodulesData.user){
				var type_user_group = JSON.parse($scope.accessmodulesData.user);
			}else{
				if($scope.accessmodulesData.group){
					var type_user_group = JSON.parse($scope.accessmodulesData.group);
				}
			}

			var pantalla = JSON.parse($scope.accessmodulesData.pantalla);

			if($scope.accessmodulesData.company) {
				var company = JSON.parse($scope.accessmodulesData.company);
				preparando_data = {
					type_user: $scope.accessmodulesData.type_user,
					id_type_user: type_user_group.id,
					name_type_user: type_user_group.name,
					company_id: company.id,
					company_name: company.name,
					all_companies: $scope.accessmodulesData.all_companies,
					pantalla_id: pantalla.id,
					pantalla_name: pantalla.name,
					pantalla_type_access: pantalla.type_access,
					pantalla_module_id: pantalla.module.id,
					pantalla_module_name: pantalla.module.name,
					acc_consult: false,
					acc_update: false,
					acc_insert: false,
					acc_remove: false,
					acc_special: false,
					acc_authorize: false
				};
			}else{
				preparando_data = {
					type_user: $scope.accessmodulesData.type_user,
					id_type_user: type_user_group.id,
					name_type_user: type_user_group.name,
					company_id: null,
					company_name: null,
					all_companies: $scope.accessmodulesData.all_companies,
					pantalla_id: pantalla.id,
					pantalla_name: pantalla.name,
					pantalla_type_access: pantalla.type_access,
					pantalla_module_id: pantalla.module.id,
					pantalla_module_name: pantalla.module.name,
					acc_consult: false,
					acc_update: false,
					acc_insert: false,
					acc_remove: false,
					acc_special: false,
					acc_authorize: false
				};
			}



			$scope.accessData.push(preparando_data);
			$scope.accessmodulesData = {};
		}

	});