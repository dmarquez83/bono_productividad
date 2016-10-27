<?php namespace App\Validation;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator as LaravelValidator;

/**
 * Created by PhpStorm.
 * User: dmarquez
 * Date: 22/09/16
 * Time: 01:32 PM
 */
class Validator extends LaravelValidator {

    public function validateCurrentPassword($attribute, $value, $parameters)
    {
        //dd(Auth::user()->password);
        return Hash::check($value, Auth::user()->password);
    }

    public function validateRootLocked($attribute, $value, $parameters)
    {
        //dd($value);
        if($value == 'root'){
            return false;
        }

    }

}