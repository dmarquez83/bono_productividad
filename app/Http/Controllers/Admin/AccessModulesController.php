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

        $access_modules =  AccessModule::orderBy('id','DESC')->paginate();
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
          'name' => 'required|unique:modules,name'
        );

        $this->validate($request, $rules);

        $data= [
          'name'  => $request->get('name'),
          'description'  => $request->get('description'),
          'status'  => 'A',
          'created_at' => new \DateTime,
          'updated_at' =>  new \Datetime
        ];
        //dd($data);
        $access_module = AccessModule::create($data);

        return redirect()->route('admin.access-modules.index');

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
