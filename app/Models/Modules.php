<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
  protected $table = 'modules';
  protected $fillable = ['name','description', 'status'];

  public function menumodules(){
    return $this->hasMany('App\Models\MenuModules');
  }
}
