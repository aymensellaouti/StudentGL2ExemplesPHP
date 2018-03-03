<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 14/11/2017
 * Time: 14:03
 */

class Voiture
{
    private $vitesse;

    /**
     * Voiture constructor.
     * @param $vitesse
     */
    public function __construct($vitesse)
    {
        $this->vitesse = $vitesse;
    }

    /**
     * @return mixed
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * @param mixed $vitesse
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }

}