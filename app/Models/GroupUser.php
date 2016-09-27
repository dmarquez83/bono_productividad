<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    protected $table = 'groups_users';
    protected $fillable = ['user_id','group_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function group(){
        return $this->belongsTo('App\Models\Group');
    }
}
