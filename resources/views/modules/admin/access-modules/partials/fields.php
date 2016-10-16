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
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 text-center">
        <button type="submit" class="btn blue" ng-click="to_insert()">Insertar</button>
      </div>
    </div>   <!-- fin row 1-->
  <div class="row">

  </div>
  <pre>{{accessmodulesData | json}} </pre>
  <pre>{{accessData | json}} </pre>
    <div class="text-center">
        <button type="submit" class="btn blue" ng-click="to_assign()">Guardar Derechos de Acceso</button>
    </div>
</form>
</body>


