<?php
/**
 * Created by PhpStorm.
 * User: Marceau
 * Date: 16/06/2018
 * Time: 17:27
 */


namespace Bnw\Controllers;

use Bnw\Core\App;

class UsersController
{
    public function create()
    {
        return view('new-user');
    }
    public function store()
    {
        App::get('database')->insert('user', [
            'lastname' => $_POST['lastname'],
            'firstname' => $_POST['firstname'],
            'mail' => $_POST['mail'],
            'pass' => sha1($_POST['pass']),
            'phone' => $_POST['phone'],
            'adress' => $_POST['adress'],
            'town' => $_POST['town'],
            'cp' => $_POST['cp']
        ]);

        return redirect('connect/user');
    }

    public function connect()
    {

    }


}