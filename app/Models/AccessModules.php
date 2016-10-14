<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessModules extends Model
{
  protected $table = 'access_modules';
  protected $fillable = ['type_user','id_type_user', 'company_id', 'companies_all','menu_modules_id','acc_consult','acc_update','acc_insert','acc_remove','acc_special','acc_authorize'];

  public function menumodule(){
    return $this->belongsTo('App\Models\MenuModule');
  }

}
