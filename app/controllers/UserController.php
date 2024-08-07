<?php 
namespace app\controllers;

use app\controllers\Controller;
use app\core\Request;
use app\support\Csrf;
use app\support\Validate;

class UserController extends Controller
{
    public function edit($params)
    {
        // $response = Request::query('page');
        // dd($response);

        
        $this->view(
            'user', 
            [
                'title'=>'Editar user'
            ]
        );

        
    }

    public function update($params)
    {   

        $validate = new Validate;
        $validate->validate([
            // 'firstName' => 'required',
            // 'lastName' => 'required',
            // 'email' => 'required|email',
            'password' => 'maxLen:10|required',
        ]);

        // Csrf::validateToken();
        // dd(Request::only(['email','firstName']));
    }

}
?>