<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Http\Requests;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies =  Company::orderBy('id','DESC')->paginate();

        return view('modules.admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.admin.companies.create');
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
        'name' => 'required|unique:companies,name',
        'cpnyid' => 'required',
        'email' => 'required|unique:companies,email'
      );

      $this->validate($request, $rules);

      $data= [
        'name'  => $request->get('name'),
        'cpnyid'  =>$request->get('cpnyid'),
        'email'  => $request->get('email'),
        'status'  => 'A',
        'created_at' => new \DateTime,
        'updated_at' =>  new \Datetime
      ];
      //dd($data);
       $company = Company::create($data);

        return redirect()->route('admin.companies.index');

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
       $company = Company::findOrFail($id);
        return view('modules.admin.companies.edit', compact('company'));
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
       $company = Company::findOrFail($id);
       $company->fill($request->all());
       $company->save();
        return redirect()->route('admin.companies.index');

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
        //Company::destroy($id);
        //abort(500);

       $company = Company::findOrFail($id);

       $company->delete();

        $message=$company->name.' fue Eliminado de Nuestro Registro';

        if($request->ajax()){
            return response()->json([
              'id' =>$company->id,
              'message' => $message
            ]);
        }

        Session::flash('message',$message);

        return redirect()->route('admin.companies.index');
    }
}
