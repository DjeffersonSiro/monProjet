<?php
namespace App\Core;

use App\Exceptions\BdConnexionException;

class DataBase{
    //connexion a la base de donnee
    private \PDO|null $pdo=null; //pas de connexion
    //Mode Deconnecte
    public function openConnexion(){
        //host : adresse du server BD
        try{
            //Essaie de te connecter
            $this->pdo=new \PDO("mysql:dbname=gestion_scolaire_l2;host=127.0.0.1","root","");
        }catch(\Exception $th){
            die("Erreur de connexion veuillez contacter votre admin");
            //throw new BdConnexionException;
        }
        

    } 

    public function closeConnexion(){
        $this->pdo=null;
    }

    public function executeSelect(string $sql,array $data=[],$single=false){
        // Requete non preparee => pas securise
        //Requete dont les variables sont injectees a l'ecriture de la requete
            //$id=1;
            //$sql='select * from classe where id=$id';

        //Requete preparee => securise
        //requete dont les variables sont injectees a l'exection dela requete
        // a l'ecriture les variables sont remplacees par des 
        
        $this->openConnexion();
            //$sql="select * from classe where id=? and role like";
            $stm=$this->pdo->prepare($sql);
            $stm->execute($data);
        if ($single) {
            $result=$stm->fetch();
        }else{
            $result=$stm->fetchAll(); //fetchall permet de recuperer plusieur donnees
        }
        $this->closeConnexion();
        return $result;
       //les requetes de selection retourne des donnees 
        
    }

    public function executeUpdate(string $sql,array $data=[]){
        $this->openConnexion();
            //$sql="select * from classe where id=? and role like";
            $stm=$this->pdo->prepare($sql);
            $stm->execute($data);
            //les requetes de mise a jour retourne toujours un entier
        $result=$stm->rowCount();
        $this->closeConnexion();
        return $result;
        

    }
}