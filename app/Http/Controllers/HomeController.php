<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Company;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      return   view('modules.admin.dashboard.content');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function company()
    {
        $company = Company::findOrFail(\Request::session()->get('company_id'));

        return $company;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index_access(Request $request)
    {
        if ($request->session()->has('company_id')) {
            //dd($request->session()->get('company_id')); // si existe imprime el valor de la variable mensaje
            $company_id=$request->session()->get('company_id');
            $user_id=\Auth::user()->id;
            $access_modules = \DB::select("select x.user_id, x.username, x.modules_id, x.modules_name, x.menu_modules_id,
                                          x.menu_modules_name, x.route_id, x.route_name, x.company_id, x.companies_all,
                                          x.acc_consult, x.acc_update, x.acc_insert, x.acc_remove, x.acc_special, x.acc_authorize
                                          FROM
                                          (SELECT b.username, f.id as modules_id, f.name as modules_name, e.name as menu_modules_name,
                                          e.route_id, i.name as route_name, b.id as user_id, a.menu_modules_id, a.company_id, a.companies_all,
                                          a.acc_cONsult, a.acc_update, a.acc_insert, a.acc_remove, a.acc_special, a.acc_authorize
                                          FROM  access_modules a
                                          LEFT JOIN users b ON (a.id_type_user=b.id)
                                          JOIN menu_modules e ON (a.menu_modules_id=e.id)
                                          LEFT JOIN modules f ON (e.module_id=f.id)
                                          LEFT JOIN routes i ON (e.route_id=i.id)
                                          WHERE a.type_user="."'Usuario'"."
                                          UNION ALL
                                          select h.username, f.id as modules_id, f.name as modules_name, e.name as menu_modules_name,
                                          e.route_id, i.name as route_name,  h.id as user_id, a.menu_modules_id, a.company_id, a.companies_all,
                                          a.acc_cONsult, a.acc_update, a.acc_insert, a.acc_remove, a.acc_special, a.acc_authorize
                                          FROM  access_modules a
                                          LEFT JOIN groups b ON (a.id_type_user=b.id)
                                          JOIN menu_modules e ON (a.menu_modules_id=e.id)
                                          LEFT JOIN modules f ON (e.module_id=f.id)
                                          LEFT JOIN routes i ON (e.route_id=i.id),
                                          groups_users g, users h
                                          WHERE a.type_user="."'Grupo'"." AND
                                          g.group_id = b.id AND
                                          g.user_id = h.id
                                          ) x
                                          WHERE x.user_id=$user_id AND (x.companies_all=true or x.company_id=$company_id)
                                          ");
            //dd($user_id);
        }

        return response()->json($access_modules);
    }

   /* public function dashboradUser()
    {
      return   view('dashborad.tableusuario');
    }

    public function dashboradAdmin()
    {
      return   view('dashborad.tableadmin');
    }*/

}
