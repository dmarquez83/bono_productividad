<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\MenuModule;
use App\Models\Module;
use App\Models\Route;
use App\Http\Requests;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class MenuModulesController extends Controller
{
    public function index()
    {
        $menu_modules =  MenuModule::orderBy('id','DESC')->paginate();

        return view('modules.admin.menu-modules.index', compact('menu_modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules =  Module::orderBy('id', 'asc')->lists('name', 'id');
        $routes = Route::orderBy('id', 'asc')->lists('name_route', 'id');
        return view('modules.admin.menu-modules.create', compact('modules','routes'));


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
          'name' => 'required|unique:menu_modules,name',
          'menu_item' => 'required',
          'type_access' => 'required',
          'module_id' => 'required',
          'route_id' => 'required'
        );

        $this->validate($request, $rules);
        //dd($request);
        $data= [
          'name'  => $request->get('name'),
          'menu_item'  => $request->get('menu_item'),
          'type_access'  => $request->get('type_access'),
          'module_id'  => $request->get('module_id'),
          'route_id'  => $request->get('route_id'),
          'created_at' => new \DateTime,
          'updated_at' =>  new \Datetime
        ];
        //dd($data);
        $menu_module = MenuModule::create($data);

        return redirect()->route('admin.menu-modules.index');

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
        $menu_module = MenuModule::findOrFail($id);
        $modules =  Module::orderBy('id', 'asc')->lists('name', 'id');
        $routes = Route::orderBy('id', 'asc')->lists('name_route', 'id');
        return view('modules.admin.menu-modules.edit', compact('menu_module','modules','routes'));
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
          'name' => 'required|unique:menu_modules,name',
          'menu_item' => 'required',
          'type_access' => 'required',
          'module_id' => 'required',
          'route_id' => 'required'
        );

        $this->validate($request, $rules);

        $menu_module = MenuModule::findOrFail($id);

        $data= [
          'name'  => $request->get('name'),
          'menu_item'  => $request->get('menu_item'),
          'type_access'  => $request->get('type_access'),
          'module_id'  => $request->get('module_id'),
          'route_id'  => $request->get('route_id'),
          'created_at' => new \DateTime,
          'updated_at' =>  new \Datetime
        ];
        //dd($data);


        $menu_module->fill($data);
        $menu_module->save();
        return redirect()->route('admin.menu-modules.index');

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
        //MenuModule::destroy($id);
        //abort(500);

        $menu_module = MenuModule::findOrFail($id);

        $menu_module->delete();

        $message=$menu_module->name.' fue Eliminado de Nuestro Registro';

        if($request->ajax()){
            return response()->json([
              'id' =>$menu_module->id,
              'message' => $message
            ]);
        }

        Session::flash('message',$message);

        return redirect()->route('admin.menu-modules.index');
    }
}
