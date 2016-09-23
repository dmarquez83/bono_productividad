<?php

namespace App\Models;;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profiles';
    protected $fillable = ['name', 'email','avatar','phone','extending', 'user_name_windows','home_page', 'user_id'];
}
