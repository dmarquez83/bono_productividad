<?php
/**
 * Created by PhpStorm.
 * User: dmarquez
 * Date: 16/09/16
 * Time: 02:05 PM
 */

namespace App\Http\Middleware;


class IsRoot extends IsType
{
    public function getType()
{
    return 'root';
}

}