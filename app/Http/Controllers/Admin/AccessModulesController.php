<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\AccessModule;
use App\Models\MenuModule;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\Module;
use App\Models\Route;
use App\Http\Requests;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class AccessModulesController extends Controller
{
    public function index()
    {

       // $access_modules =  AccessModule::orderBy('id','DESC')->paginate();
        $access_modules = \DB::select("select x.id, x.type_user,   x.id_type_user, x.name as name_user, x.company_id,
                        (CASE WHEN x.company_id>0 THEN x.company  ELSE "."'Todas las Empresas'"." END) as name_company,
                        x.menu_modules_id, x.name_pantalla, x.name_module, x.companies_all, x.type_access,
                        x.acc_consult, x.acc_update, x.acc_insert, x.acc_remove, x.acc_special, acc_authorize,
                        x.created_at, x.updated_at
                        from
                        (select c.name, d.name as company, e.name as name_pantalla, f.name as name_module , e.type_access, a.* from  access_modules a
                        left join users b on (a.id_type_user=b.id)
                        left join user_profiles c on (b.id=c.id)
                        left join companies d on (a.company_id=d.id)
                        join menu_modules e on (a.menu_modules_id=e.id)
                        left join modules f on (e.module_id=f.id)
                        where a.type_user="."'Usuario'"."
                        union all
                        select b.name, d.name as company, e.name as name_pantalla, f.name as name_module , e.type_access, a.* from  access_modules a
                        left join groups b on (a.id_type_user=b.id)
                        left join companies d on (a.company_id=d.id)
                        join menu_modules e on (a.menu_modules_id=e.id)
                        left join modules f on (e.module_id=f.id)
                        where a.type_user="."'Grupo'"." ) x
                        order by  x.type_user, x.name, x.name_module , x.menu_modules_id");



        //dd($access_modules);
        return view('modules.admin.access-modules.index', compact('access_modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_modules =  MenuModule::orderBy('id', 'asc')->lists('name', 'id');

        return view('modules.admin.access-modules.create', compact('menu_modules'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
          'type_user' => 'required',
          'id_type_user' => 'required',
          'menu_modules_id' => 'required'
        );

        $this->validate($request, $rules);

        if($request->get('company_id')==''){
            $company_id = NULL;
        }else{
            $company_id = $request->get('company_id');
        }

        $data= [
            'type_user'  => $request->get('type_user'),
            'id_type_user'  => $request->get('id_type_user'),
            'company_id'  => $company_id,
            'companies_all'  => $request->get('all_companies'),
            'menu_modules_id'  => $request->get('menu_modules_id'),
            'acc_consult'  => $request->get('acc_consult'),
            'acc_update'  => $request->get('acc_update'),
            'acc_insert'  => $request->get('acc_insert'),
            'acc_remove'  => $request->get('acc_remove'),
            'acc_special'  => $request->get('acc_special'),
            'acc_authorize'  => $request->get('acc_authorize'),
            'created_at' => new \DateTime,
            'updated_at' =>  new \Datetime
        ];
        //dd($data);
        $access_module = AccessModule::create($data);

        return response()->json(array('success' => true));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $access_module = AccessModule::findOrFail($id);
        return view('modules.admin.access-modules.edit', compact('access_module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = array(
          'name' => 'required|unique:modules,name'
        );

        $this->validate($request, $rules);

        $access_module = AccessModule::findOrFail($id);

        $data= [
          'name'  => $request->get('name'),
          'email' =>  $request->get('email'),
          'status'  => 'A',
          'created_at' => new \DateTime,
          'updated_at' =>  new \Datetime
        ];
        //dd($data);


        $access_module->fill($data);
        $access_module->save();
        return redirect()->route('admin.access-modules.index');

        //return redirect()->back(); //con este redirecciona al mismo formulario
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        //dd('Eliminando :'.$id);
        //AccessModule::destroy($id);
        //abort(500);

        $access_module = AccessModule::findOrFail($id);

        $access_module->delete();

        $message=$access_module->name.' fue Eliminado de Nuestro Registro';

        if($request->ajax()){
            return response()->json([
              'id' =>$access_module->id,
              'message' => $message
            ]);
        }

        Session::flash('message',$message);

        return redirect()->route('admin.access-modules.index');
    }

    public function user_list()
    {
        return response()->json(User::with(['userprofile'])->get());
    }

    public function menu_modules_list()
    {
        return response()->json(MenuModule::with(['module','route'])->get());
    }
}
