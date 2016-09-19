<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name','last_name', 'email', 'password', 'type'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function getFullNameAttribute(){
       return $this->first_name.' '.$this->last_name;
    }

    public function setPasswordAttribute($value){
        //$this->attributes['password']=\Hash::make($value);/
        if( !empty($value)){
            $this->attributes['password']=bcrypt($value);
        }

    }

    public function scopeName($query, $name){
        if(trim($name) != ""){
            $query->where(\DB::raw("first_name||' '||last_name"),"LIKE","%$name%");
            //esto se puede arreglar creando un campo full name en la Bd y ya no tendria que utilizar el facades DB
        }
    }

    public function isAdmin(){
        return $this->type === 'admin';
    }

    public function is($type){
        return $this->type === $type;
    }
}
