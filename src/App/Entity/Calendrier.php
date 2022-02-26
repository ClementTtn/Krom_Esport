<?php

namespace App\Entity;

class Calendrier
{
    private $id;
    private $date;
    private $heure;
    private $intitule;
    private $lien_evenement;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @param mixed $heure
     */
    public function setHeure($heure): void
    {
        $this->heure = $heure;
    }

    /**
     * @return mixed
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @param mixed $intitule
     */
    public function setIntitule($intitule): void
    {
        $this->intitule = $intitule;
    }

    /**
     * @return mixed
     */
    public function getLienEvenement()
    {
        return $this->lien_evenement;
    }

    /**
     * @param mixed $lien_evenement
     */
    public function setLienEvenement($lien_evenement): void
    {
        $this->lien_evenement = $lien_evenement;
    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return ("Calendrier");
    }

}