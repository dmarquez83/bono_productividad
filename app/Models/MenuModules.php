<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuModules extends Model
{
  protected $table = 'menu_modules';
  protected $fillable = ['name','description', 'module_id','route_id'];

  public function module(){
    return $this->belongsTo('App\Models\Module');
  }

  public function route(){
    return $this->belongsTo('App\Models\Route');
  }
}
