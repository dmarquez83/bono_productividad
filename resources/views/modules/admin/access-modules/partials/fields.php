<!-- declare our angular app and controller -->
<body class="container" ng-app="app" ng-controller="accessModulesController">
<form ng-submit="submitGroupUser()">
    <div class="row">
        <p class="text-center" ng-show="loading"><span class="fa fa-spinner fa-5x fa-spin"></span></p>
        <div class="form-group col-md-3">
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
            <!-- <pre>{{accessmodulesData | json}}</pre>-->
       </div>
       <!-- lista de usuario-->
        <div class="col-md-12 col-sm-12"  ng-show="type_user">
            <div class="portlet light tasks-widget bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-green-haze hide"></i>
                        <span class="caption-subject font-green bold uppercase">Usuarios</span>
                        <span class="caption-helper">Listado de Usuarios Activos</span>
                    </div>
                    <div class="actions">
                        <div class="btn-group">
                            <button type="button" class="btn btn-circle grey-mint" ng-click="isChecked_user_all()" >Seleccionar Todos</button>
                        </div>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="task-content">
                        <div class="scroller" style="height: 312px;" data-always-visible="1" data-rail-visible1="1">
                            <!-- START TASK LIST -->
                            <ul class="task-list">
                                <!-- <pre>{{user_check_data | json}}</pre>-->
                                <li class="user" ng-hide="loading" ng-repeat="user in users track by $index">
                                    <div class="task-title">
                                        <input type="checkbox" class="icheck" ng-change="sync(user_check, user.user)" ng-model="user_check" ng-checked="isChecked(user.user.id)">
                                        <span class="task-title-sp"> {{ user.user.username }}</span>
                                        =>
                                        <span class="task-title-sp"> {{ user.user.userprofile[0].name }}</span>
                                    </div>
                                </li>
                            </ul>
                            <!-- END START TASK LIST -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- fin lista de usuario-->
    </div>   <!-- fin row 1-->
    <div class="text-center">
        <button type="submit" class="btn blue">Asignar Derechos de Acceso</button>
    </div>
</form>
</body>


