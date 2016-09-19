<?php
/**
 * Created by PhpStorm.
 * User: dmarquez
 * Date: 16/09/16
 * Time: 02:04 PM
 */

namespace App\Http\Middleware;


class IsUser extends IsType
{
    public function getType()
{
    return 'user';
}

}