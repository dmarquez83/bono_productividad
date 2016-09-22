<?php
namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use App\Validation\Validator as Validation;
/**
 * Created by PhpStorm.
 * User: dmarquez
 * Date: 22/09/16
 * Time: 01:32 PM
 */

class ValidatorServiceProvider extends ServiceProvider {

    public function boot()
    {
        Validator::resolver(function($translator, $data, $rules, $messages)
        {
            return new Validation($translator, $data, $rules, $messages);
        });
    }

    public function register()
    {
    }

}