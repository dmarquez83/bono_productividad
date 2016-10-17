<!-- declare our angular app and controller -->
<body class="container" ng-app="app" ng-controller="accessModulesController">
<form ng-submit="submitGroupUser()">
  <div class="row">
        <p class="text-center" ng-show="loading"><span class="fa fa-spinner fa-5x fa-spin"></span></p>
        <div class="form-group col-md-3 col-sm-3">
            <label for="type_user">Tipo</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-navicon"></i>
                </span>
                <select class="form-control"  ng-model="accessmodulesData.type_user" ng-change="show_type_user()">
                    <option value="Usuario">Usuario</option>
                    <option value="Grupo">Grupo</option>
                </select>
            </div>
       </div>
      <div class="col-md-9 col-sm-9"></div>
  </div>
  <div class="row">
       <!-- lista de usuario-->
        <div class="col-md-12 col-sm-12"  ng-show="type_user">
            <label for="type_user">Usuario</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-user"></i>
                </span>
                <select class="form-control"  ng-model="accessmodulesData.user" >
                    <option
                      ng-hide="loading"
                      ng-repeat="user in users track by $index"
                      value="{{ user }}">
                        {{ user.username }} - {{ user.userprofile[0].name }}
                    </option>
                </select>
            </div>
            <!-- <pre>{{accessmodulesData | json}}</pre>-->
        </div>
        <!-- fin lista de usuario-->
      <!-- lista de Grupo-->
      <div class="col-md-12 col-sm-12"  ng-show="type_group">
        <label for="type_user">Grupos</label>
        <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-users"></i>
                </span>
          <select class="form-control"  ng-model="accessmodulesData.group" >
            <option
              ng-hide="loading"
              ng-repeat="group in groups track by $index"
              value="{{ group }}">
              {{ group.name }}
            </option>
          </select>
        </div>
      </div>
      <!-- fin lista de grupo-->
      <!-- lista de companies-->

      <div class="col-md-9 col-sm-9"  >        
        <label for="type_user">Empresa</label>
        <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-briefcase"></i>
                </span>
          <select class="form-control"  ng-model="accessmodulesData.company" ng-change="all_companies_false()" >
            <option
              ng-hide="loading"
              ng-repeat="company in companies track by $index"
              value="{{ company }}">
              {{ company.name }}
            </option>
          </select>
        </div>
      </div>
      <div class="col-md-3 col-sm-3"  >
        <label >Todas las Empresas</label>
          <div class="input-group">
            <div class="icheck-list">
              <input type="checkbox" ng-model="accessmodulesData.all_companies" ng-change="all_companies()">
            </div>
          </div>
      </div>
      <!-- fin lista de companies-->
  </div> <!-- Finf row-->
  <!-- lista de pantalla-->
  <div class="row">
    <div class="col-md-12">
        <label for="type_user"></label>
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-settings"></i>Pantalla / Modulos                  
                </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
               <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="access_modules" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th class="all">#</th>
                  <th class="all">Descripcion</th>
                  <th class="all">Tipo</th>
                  <th class="all">Modulo</th>
                  <th class="all">Consultar</th>
                  <th class="all">Actualizar</th>
                  <th class="all">Insertar</th>
                  <th class="all">Eliminar</th>
                  <th class="all">Especial</th>
                  <th class="all">Autorizar</th>
                 
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="menuModule in menuModules" >
                  <td>{{ menuModule.id }}</td>
                  <td>{{ menuModule.name }}</td>
                  <td>{{ menuModule.type_access }}</td>
                  <td>{{ menuModule.module.name }}</td>
                  <td><input type="checkbox" class="icheck" ng-change="sync(acc_consult, menuModule.id, 'acc_consult')" ng-model="acc_consult" ng-checked="isChecked(menuModule.id, 'acc_consult')" ></td>                  
                  <td><input type="checkbox" class="icheck" ng-change="sync(acc_update, menuModule.id, 'acc_update')" ng-model="acc_update" ng-checked="isChecked(menuModule.id, 'acc_update')" ></td>                  
                  <td><input type="checkbox" class="icheck" ng-change="sync(acc_insert, menuModule.id, 'acc_insert')" ng-model="acc_insert" ng-checked="isChecked(menuModule.id, 'acc_insert')" ></td>                  
                  <td><input type="checkbox" class="icheck" ng-change="sync(acc_remove, menuModule.id, 'acc_remove')" ng-model="acc_remove" ng-checked="isChecked(menuModule.id, 'acc_remove')" ></td>                  
                  <td><input type="checkbox" class="icheck" ng-change="sync(acc_special, menuModule.id, 'acc_special')" ng-model="acc_special" ng-checked="isChecked(menuModule.id, 'acc_special')" ></td>                  
                  <td><input type="checkbox" class="icheck" ng-change="sync(acc_authorize, menuModule.id, 'acc_authorize')" ng-model="acc_authorize" ng-checked="isChecked(menuModule.id, 'acc_authorize')" ></td>                  
                </tr>
                </tbody>
              </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
  <!-- fin lista de pantalla-->
  <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        <button type="submit" class="btn blue" ng-click="to_insert()">Guardar</button>
      </div>
  </div>   <!-- fin row 1-->
<!-- <div class="row">
 <pre>{{accessmodulesData | json}} </pre>-->
    <!--  <pre>{{accessData | json}} </pre>-->
    <!-- <pre>{{option_check_data | json}} </pre>-->
<!-- </div>-->
</form>
</body>


