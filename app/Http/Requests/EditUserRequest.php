<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditUserRequest extends Request
{

    public function __construct(Route $route)
    {
        $this->route = $route;

    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       //dd($this->route->getParameter('users')); para ver el parametro que me llega en este caso el id del user
       //previamente se paso la ruta por el constructor
       //con este excluimos la validacion que el email es unico al moemnto de editar para el correo que ya existe

        return [
            'username' => 'required|unique:users,username,'.$this->route->getParameter('users')
        ];
    }
}
