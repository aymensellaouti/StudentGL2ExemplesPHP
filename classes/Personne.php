<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 14/11/2017
 * Time: 14:02
 */
include 'CnxBD.php';
class Personne
{
    private $id;
    private $nom;
    private $prenom;
    private $age;
    private $path;
    private $bd;

    /**
     * Personne constructor.
     * @param $id
     * @param $nom
     * @param $prenom
     * @param $age
     * @param $path
     */
    public function __construct(/*$id, $nom, $prenom, $age, $path*/)
    {
        $this->bd=CnxBD::getInstance();
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function listePersonnes(){
       $req='select * from personne';
            $reponse = $this->bd->query($req);
       return $reponse->fetchAll(PDO::FETCH_OBJ);
    }

}