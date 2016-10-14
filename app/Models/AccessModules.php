<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessModules extends Model
{
  protected $table = 'access_modules';
  protected $fillable = ['name','status', 'menu_modules_id'];

  public function menumodule(){
    return $this->belongsTo('App\Models\MenuModule');
  }

}
