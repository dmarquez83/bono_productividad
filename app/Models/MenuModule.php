<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuModule extends Model
{
  protected $table = 'menu_modules';
  protected $fillable = ['name','menu_item','type_access', 'module_id','route_id'];

  public function module(){
    return $this->belongsTo('App\Models\Module');
  }

  public function route(){
    return $this->belongsTo('App\Models\Route');
  }
}
