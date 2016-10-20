<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $table = 'modules';
    protected $fillable = ['name','description'];

    public function modules(){
        return $this->hasMany('App\Models\Modules');
    }
}
