<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Module;
use App\Http\Requests;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ModulesController extends Controller
{
    public function index()
    {
        $modules =  Module::orderBy('id','DESC')->paginate();

        return view('modules.admin.modules.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.admin.modules.create');
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
        $module = Module::create($data);

        return redirect()->route('admin.modules.index');

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
        $module = Module::findOrFail($id);
        return view('modules.admin.modules.edit', compact('module'));
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

        $module = Module::findOrFail($id);

        $data= [
          'name'  => $request->get('name'),
          'email' =>  $request->get('email'),
          'status'  => 'A',
          'created_at' => new \DateTime,
          'updated_at' =>  new \Datetime
        ];
        //dd($data);


        $module->fill($data);
        $module->save();
        return redirect()->route('admin.modules.index');

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
        //Module::destroy($id);
        //abort(500);

        $module = Module::findOrFail($id);

        $module->delete();

        $message=$module->name.' fue Eliminado de Nuestro Registro';

        if($request->ajax()){
            return response()->json([
              'id' =>$module->id,
              'message' => $message
            ]);
        }

        Session::flash('message',$message);

        return redirect()->route('admin.modules.index');
    }
}
