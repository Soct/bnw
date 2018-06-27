<?php
/**
 * Created by PhpStorm.
 * User: marceaupheulpin
 * Date: 27/06/2018
 * Time: 09:58
 */

namespace Bnw\Controllers;


use Bnw\Core\App;
use Bnw\Models\Animal;

class AnimalsController
{

    public function show(){

        $animals = App::get('database')->selectAll('animal', 'Animal');

        return view('animal',  compact('animals'));
    }
    public function create()
    {
        return view('new-animal');
    }
    public function store()
    {
        if(1){
            App::get('database')->insert('animal', [
                'iduser' => $_SESSION['utilisateur']->getIduser(),
                'nom' => $_POST['nom'],
                'poids' => $_POST['poid'],
                'race' => $_POST['race']
            ]);

            return redirect('');

        } else {

            return view('new-animal');

        }
    }

}