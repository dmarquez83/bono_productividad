<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\UserProfile;
use App\Http\Requests;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UsersProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'name' => 'required|unique:groups,name|max:255'
        );

        $this->validate($request, $rules);

        $userProfile = UserProfile::where('user_id', '=', $id)->firstOrFail();
        //$userProfile = UserProfile::findOrFail($id);

        $data= [
            'name'  => $request->get('name'),
            'phone'  => $request->get('phone'),
            'extending'  => $request->get('extending'),
            'user_name_windows'  => $request->get('user_name_windows'),
            'home_page'  => $request->get('home_page'),
            'user_id'  => $id,
            'created_at' => new \DateTime,
            'updated_at' =>  new \Datetime
        ];
        //dd($data);

        $userProfile->fill($data);
        return redirect()->route('admin.users.index');
        //return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
