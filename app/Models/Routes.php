<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
  protected $table = 'routes';
  protected $fillable = ['method','uri','name','action','status'];

  public function menumodules(){
    return $this->hasMany('App\Models\MenuModules');
  }
}
