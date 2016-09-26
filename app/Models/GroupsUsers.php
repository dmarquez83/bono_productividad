<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupsUsers extends Model
{
    protected $table = 'groups_users';
    protected $fillable = ['user_id','group_id'];
}
