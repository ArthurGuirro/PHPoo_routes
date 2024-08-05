<?php
namespace app\controllers;

use app\controllers\Controller;
use app\database\Filters;
use app\database\models\User;

class HomeController extends Controller
{
    public function index()
    {   

        $arr = ['name'=>'Robson','color'=>'red'];
        $uri=http_build_query(array_merge($arr, $_GET));

        dd($_GET);

        // $filters = new Filters;
        // $filters->join('posts', 'users.id', '=', 'posts.userId', 'left join');
        // $filters->where('users.id', '<', 100);
        // $user = new User;
        // $user->setFilters($filters);
        // $user->setFields('users.id,firstName,lastName,title');
        // $userFound = $user->fetchAll();
        // dd($userFound);
        // $user = new User;
        // $updated =  $user->update('id',4,['firstName'=>'Tutu', 'lastName'=>'Mascote']);
        // dd($updated);
        // $created = $user->create([
        //     'firstName'=>"gpt",
        //     'lastName'=>"da silva",
        //     'email'=>"gp@t.com",
        //     'passwords'=>"1234"
        // ]);
        // dd($created);
        // foreach ($userFound as $user1) {
        //     dd($user1->teste());
        // }
        //dd($usersFound);
        // $filters->dump();
        // $user = new User;
        // $user->fetch();

        $this->view('home', ['title' => 'Home']);//error 12:50
    }
}

?>