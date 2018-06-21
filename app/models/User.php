<?php
/**
 * Created by PhpStorm.
 * User: Marceau
 * Date: 16/06/2018
 * Time: 17:05
 */

namespace Bnw\Models;


class User
{
    private $iduser;
    private $lastname;
    private $firstname;
    private $adress;
    private $town;
    private $cp;
    private $mail;
    private $phone;
    private $type = 0;

/*    /**
     * User constructor.
     * @param $id
     * @param $nom
     * @param $prenom
     * @param $adresse
     * @param $ville
     * @param $cp
     * @param $mail
     * @param $telephone
     * @param int $type
     *
    public function __construct($id, $nom, $prenom, $adresse, $ville, $cp, $mail, $telephone, $type)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->cp = $cp;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->type = $type;
    }*/

    public function __construct()
    {

    }


    public function hydrate($data) {
        $this->iduser = $data['iduser'];
        $this->lastname = $data['lastname'];
        $this->firstname = $data['firstname'];
        $this->adress = $data['adress'];
        $this->town = $data['town'];
        $this->cp = $data['cp'];
        $this->mail = $data['mail'];
        $this->phone = $data['phone'];
        $this->type = $data['type'];
    }


}