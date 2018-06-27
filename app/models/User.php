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

    /**
     * @return mixed
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * @param mixed $iduser
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return mixed
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param mixed $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


}