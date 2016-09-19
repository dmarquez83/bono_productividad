<?php
/**
 * Created by PhpStorm.
 * User: dmarquez
 * Date: 16/09/16
 * Time: 02:01 PM
 */

namespace App\Http\Middleware;


class IsAdmin extends IsType
{
    public function getType()
    {
        return 'admin';
    }

}