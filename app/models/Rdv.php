<?php
/**
 * Created by PhpStorm.
 * User: marceaupheulpin
 * Date: 27/06/2018
 * Time: 10:16
 */

namespace Bnw\Models;


class Rdv
{
    private $idrdv;
    private $idanimal;
    private $date;
    private $nom;

    /**
     * @return mixed
     */
    public function getIdrdv()
    {
        return $this->idrdv;
    }

    /**
     * @param mixed $idrdv
     */
    public function setIdrdv($idrdv)
    {
        $this->idrdv = $idrdv;
    }

    /**
     * @return mixed
     */
    public function getIdanimal()
    {
        return $this->idanimal;
    }

    /**
     * @param mixed $idanimal
     */
    public function setIdanimal($idanimal)
    {
        $this->idanimal = $idanimal;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }


}