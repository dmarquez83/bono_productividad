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
    
    $scope.option_check_data=[];

		$scope.isChecked = function(id, campo){
			var match = false;
			for(var i=0 ; i < $scope.option_check_data.length; i++) {				
				if($scope.option_check_data[i].id == id && $scope.option_check_data[i].campo == campo){
					match = true;
				}
			}
			return match;
		};

		$scope.sync = function(check, item, campo){
			if(check){				
				$scope.option_check_data.push({id: item, campo: campo});
			} else {				
				for(var i=0 ; i < $scope.option_check_data.length; i++) {			
					if($scope.option_check_data[i].id == item && $scope.option_check_data[i].campo == campo){
						$scope.option_check_data.splice(i,1);
					}
				}
			}			
		};

		$scope.to_insert = function(){
			$scope.loading = true;

			var preparando_data= [];

			if($scope.accessmodulesData.user){
				var type_user_group = JSON.parse($scope.accessmodulesData.user);
			}else{
				if($scope.accessmodulesData.group){
					var type_user_group = JSON.parse($scope.accessmodulesData.group);
				}
			}

			var option_check_data = _.groupBy($scope.option_check_data, 'id');

			angular.forEach((option_check_data), function (row) { 
					var acc_consult = false;
			  	    var acc_update = false;
					var acc_insert = false;
					var acc_remove = false;
					var acc_special = false;
					var acc_authorize = false;
					var id_menu_modules = null;
				    var company_id = null;
				    var all_company = false;

					angular.forEach((row), function (row_det) {
						id_menu_modules = row_det.id;
						if(row_det.campo == 'acc_consult')	acc_consult = true;
						if(row_det.campo == 'acc_update')	acc_update = true;
						if(row_det.campo == 'acc_insert')	acc_insert = true;
						if(row_det.campo == 'acc_remove')	acc_remove = true;
						if(row_det.campo == 'acc_special')	acc_special = true;
						if(row_det.campo == 'acc_authorize')	acc_authorize = true;
					});

					if($scope.accessmodulesData.company) {
						var company = JSON.parse($scope.accessmodulesData.company);
						company_id = company.id;

					}else{
						company_id = null;
					}

				 	if ($scope.accessmodulesData.all_companies){
						all_company = true;
					}
				preparando_data = {
					type_user: $scope.accessmodulesData.type_user,
					id_type_user: type_user_group.id,
					name_type_user: type_user_group.name,
					company_id: company_id,
					all_companies: all_company,
					menu_modules_id: id_menu_modules,
					acc_consult: acc_consult,
					acc_update: acc_update,
					acc_insert: acc_insert,
					acc_remove: acc_remove,
					acc_special: acc_special,
					acc_authorize: acc_authorize

				};

				$scope.accessData.push(preparando_data);

				server.save('api', preparando_data)
					.success(function(data) {
						//console.log('Se registraron los datos :',preparando_data);
					})
					.error(function(data) {
						//console.log(data,'error de registro', preparando_data);
					});

			});
			$scope.loading = false;
			$scope.accessmodulesData = {};
		}

	});

