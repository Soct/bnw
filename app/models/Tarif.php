<?php
/**
 * Created by PhpStorm.
 * User: Marceau
 * Date: 03/07/2018
 * Time: 10:40
 */

namespace Bnw\Models;


class Tarif
{
    private $idtarif;
    private $nom;
    private $prix;

    /**
     * @return mixed
     */
    public function getIdtarif()
    {
        return $this->idtarif;
    }

    /**
     * @param mixed $idtarif
     */
    public function setIdtarif($idtarif)
    {
        $this->idtarif = $idtarif;
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
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }


}