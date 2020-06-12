<?php

require 'Repository.php';
class Personne extends Repository
{
    private $id;
    private $nom;
    private $prenom;
    private $age;

    public function __construct($id = 0, $nom = '', $prenom = '', $age = 0)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->setTableName();
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
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
    public function setNom($nom): void
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
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
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
    public function setAge($age): void
    {
        $this->age = $age;
    }


    public function login($username, $password)
    {
        $bd = ConnexionBD::getInstance();

        $requete = "SELECT * FROM personne WHERE nom=:monNom and id=:monID";

        $reponse = $bd->prepare($requete);
        $reponse->execute(array(
            'monNom' => $_POST['username'],
            'monID' => $_POST['password']));
        $user = $reponse->fetch(PDO::FETCH_OBJ);
        return $user;
    }


    function setTableName()
    {
        $this->tableName='personne';
    }
}