<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateuserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use App\Models\GroupUser;
use App\Models\UserProfile;
use App\Http\Requests;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::findOrFail(\Auth::user()->id);

        $userProfile = UserProfile::where('user_id', '=', \Auth::user()->id)->firstOrFail();

        $userGroups =  GroupUser::with(['group','user'])->where('user_id', '=', \Auth::user()->id)->get();

        //agregar luego la cantidad de miembros del grupo y el porcentaje que representa angular

       return view('modules.user.profile',  compact('user', 'userProfile','userGroups'));
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_profile(Request $request)
    {
        $userProfile = UserProfile::where('user_id', '=', \Auth::user()->id)->firstOrFail();

        $rules = array(
            'name' => 'required|unique:user_profiles,name,'.$userProfile->id,
            'email' => 'required|unique:user_profiles,email,'.$userProfile->id,
            'home_page' => 'required'
        );

        $this->validate($request, $rules);

        $data= [
            'id'   => $userProfile->id,
            'name'  => $request->get('name'),
            'email'  => $request->get('email'),
            'phone'  => $request->get('phone'),
            'extending'  => $request->get('extending'),
            'user_name_windows'  => $request->get('user_name_windows'),
            'home_page'  => $request->get('home_page'),
            'user_id'  => \Auth::user()->id,
            'created_at' => new \DateTime,
            'updated_at' =>  new \Datetime
        ];
       // dd($userProfile->save($data));

        $userProfile->fill($data);

        $userProfile->save();

       // return redirect()->route('admin.users.index');
       return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_password(Request $request)
    {
        $user = User::findOrFail(\Auth::user()->id);

       // dd(Crypt::decrypt($user->password));

        $rules = array(
            'password_ac' => 'required|min:6|current_password',
            'password' => 'confirmed|min:6'
        );

        $this->validate($request, $rules);

        $data = [
            'password' =>  $request->get('password')
        ];

        $user->fill($data);
        $user->save();
        //  return redirect()->route('admin.users.index');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_avatar(Request $request)
    {
       //dd($request);
        $userProfile = UserProfile::where('user_id', '=', \Auth::user()->id)->firstOrFail();

        $input = Input::file('avatar');

        $image = Image::make($input);

        $name = \Auth::user()->username.'_'.\Auth::user()->id;

        $path = public_path().'/img/profile/'.$name;

        if($image->save($path.'.jpg')){
            $image->resize(240,240);
            // Guardar
            $image->save($path.'-thumb'.'.jpg');
        }

        $data= [
            'avatar'   => $name.'.jpg'
        ];
        $userProfile->fill($data);

        //dd($userProfile);

        $userProfile->save();

        session()->flash('message', 'Imagen de Perfil Guardada Correctamente.');
        //  return redirect()->route('admin.users.index');
        return redirect()->back();
    }




}
