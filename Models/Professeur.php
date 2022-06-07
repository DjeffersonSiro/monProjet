<?php
namespace App\Models;
use professeur as GlobalProfesseur;

class professeur extends User{
    private string $grade;
    private string $nomComplet;
    //one to one
    private Adresse $adresse;
    public function __construct(){
        parent::$role="ROLE_PROFFESEUR";
        $this->adresse = new Adresse;
    }


    //one to many avec cours
    public function cours():array{
        return [];
    }
    //many to many avec module
    public function modules():array{
        return [];
    }

    //one to one avec adresse
    public function adresse():Adresse{
        return new Adresse();
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

      /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }
      // redefinition => evolution
    // 1- heritage de methode
    // 2- possibilite de redefinir = changer son comportement
     /**
     * Set the value of role
     *
     * @return  self
     */ 
   // public function setRole($role)
    //{
    //    $this->role = $role; 
    //    return $this;
    //}
    public static function selectAll(){
        $sql="select * from where role like ? ";
        return parent::database()->executeSelect($sql,[parent::$table, parent::$role]);

    }

    public function insert(){
        $sql="INSERT INTO ? (`login`, `password`, `grade`, `ville`, `quartier`, `role`,`nom_complet`)
        VALUES (?, ?, ?, ?, ?, ?, ?);";
        return parent::database()->executeUpdate($sql,[
                    parent::$table,
                    $this->login,$this->password,$this->grade,
                    $this->adresse->getVille(), $this->adresse->getQuartier(),
                    parent::$role, $this->nomComplet]);
    }

  
}