<?php
namespace App\src\DAO;
use PDO;
use Exception;
abstract class DAO
{
    private $connection;
//verifie si la connection existe déja si non, elle établie une nouvelle
    private function checkConnection()
    {
        if($this->connection ===null){
            return $this->getConnection();
        }
        return $this->connection;
    }
    // Méthode de connexion à la bdd
    public function getConnection()
    {
        // try catch pour une tentative de connexion
        try
        {
              //$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $connection = new PDO(DB_LINK, DB_USER, DB_MDP);
            $connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
            }
        catch (Exception $erreurDeConnection)
        {
                die('Erreur de connection:'.$erreurDeConnection->getMessage());
        }   
    }
    //creation de requetes avec paremetres initialiser à null
    protected function createQuery($sql, $parametres = null)
    {
        if($parametres)
        {
            $resultat = $this->checkConnection()->prepare($sql);
            //$resultat->setFetchMode(PDO::FETCH_CLASS, static::class);
            $resultat->execute($parametres);
            return $resultat;
        }
        $resultat = $this ->checkConnection()->query($sql);
       // $resultat ->setFetchMode(PDO::FETCH_CLASS, static::class);
        return $resultat;
    }
}
?>