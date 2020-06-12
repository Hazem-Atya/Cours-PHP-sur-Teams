<?php
require_once "ConnexionBD.php";
abstract class Repository
{

    protected $tableName;
    abstract function setTableName();

    public
    function findAll()
    {

        $bd = ConnexionBD::getInstance();
        $req = "SELECT * FROM ".$this->tableName;
        $reponse = $bd->prepare($req);
        $reponse->execute([]);
        $data = $reponse->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function deletePersonne($id)
    {
        $bd = ConnexionBD::getInstance();
        $requete = "DELETE FROM ".$this->tableName." WHERE id=:id ";

        $reponse = $bd->prepare($requete);
        $reponse->execute(array(
            'id' => $id));
        return $reponse->fetch();
    }
}