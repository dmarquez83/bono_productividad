<div class="col-xs-5 col-sm-6  class="text-center" ng-controller="accessUsersController">
    <input type="hidden"  ng-init="menu_modules = 3 ">
    <button type="submit" onclick="return confirm('Seguro que desea Eliminar?')" class="btn btn-danger" ng-disabled="acc_remove" >Eliminar</button>
</div>