<?php
/**
 * Created by PhpStorm.
 * User: Marceau
 * Date: 16/06/2018
 * Time: 17:27
 */


namespace Bnw\Controllers;

use Bnw\Core\App;
use Bnw\Models\User;

class UsersController
{
    public function create()
    {
        return view('new-user');
    }
    public function store()
    {
        if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) && ($_POST['pass'] == $_POST['passVerif'])){
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
        } else {
            return view('new-user');
        }


    }

    public function connect($tab = null)
    {
        if($tab != null){
            return view('connect', compact('tab'));
        } else {
            return view('connect');
        }
    }

    public function validate()
    {
        $validate = App::get('database')->selectOneUser('user', 'User', $_POST['mail'], sha1($_POST['pass']));
        // on recupérer un array vide si rien et avec un objet dedans si l'utilsateur existe
        if(!empty($validate)){
            $_SESSION['utilisateur'] = $validate[0];
            return view('index');
        } else {
            $this->connect($_POST);
        }
    }

    public function deconnect(){
        session_unset();
        session_destroy();
        return view('index');
    }


}