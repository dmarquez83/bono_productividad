<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessUsers extends Model
{
  protected $table = 'access_users';
  protected $fillable = ['access_modules_id','users_id'];

  public function accessmodule(){
    return $this->belongsTo('App\Models\AccessModule');
  }

  public function user(){
    return $this->belongsTo('App\Models\User');
  }
}
