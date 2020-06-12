<?php


class ConnexionBD
{
    private static $cnxPDO = null;
    //static car on veut avoir une seule connexion à la base
    private const HOST = 'localhost';
    private const BD_NAME = 'test_pdo';
    private const USER = 'root';
    private const PWD = '';

    private function __construct()
        //bloquer l'instanciation de la classe (le constructeur est private)
    {
        try {
            self::$cnxPDO = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::BD_NAME,
                self::USER, self::PWD);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$cnxPDO) {
            new ConnexionBD();
            // echo ' Je viens d\'instancier ma variable cnxpdo <br>';
        } else {
            // echo "J'utilise la meme instance <br>";
        }
        return self::$cnxPDO;

    }
}