<?php
/**
 * Created by PhpStorm.
 * User: marceaupheulpin
 * Date: 27/06/2018
 * Time: 10:16
 */

namespace Bnw\Controllers;



use Bnw\Core\App;
use Bnw\Models\Rdv;

class RdvsController
{

    public function show()
    {
        $rdvs = App::get('database')->selectUserRdv($_SESSION['utilisateur']->getIduser());

        if(!empty($_GET)){
            $animals = App::get('database')->selectOneById('animal', 'Animal', $_GET['id']);
            return view('rdv', compact('animals'), compact('rdvs'));
        } else {
            return view('rdv', compact('rdvs'));
        }
    }

    public function store() {
        //die(var_dump($_POST["date"]. " ". $_POST["heure"]));
        $date = new \DateTime($_POST["date"]. " ". $_POST["heure"]);
        App::get('database')->insert('rdv', [
            'date' => date_format($date, 'Y-m-d H:i:s' ),
            'idanimal' => $_POST['idanimal']
        ]);

        return redirect('rdv');

    }
}