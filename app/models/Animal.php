<?php
/**
 * Created by PhpStorm.
 * User: marceaupheulpin
 * Date: 27/06/2018
 * Time: 09:58
 */

namespace Bnw\Models;


class Animal
{
    private $idanimal;
    private $iduser;
    private $nom;
    private $race;
    private $poids;

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

    /**
     * @return mixed
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @param mixed $race
     */
    public function setRace($race)
    {
        $this->race = $race;
    }

    /**
     * @return mixed
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @param mixed $poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    }



}