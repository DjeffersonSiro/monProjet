<?php
namespace App\Models;
class Etudiant extends User{
    private int $id;
    private string $nomComplet;
    private string $matricule;
    //one to one
    private Adresse $adresse;


    public function __construct(){
        parent::$role="ROLE_ETUDIAND";
        $this->adresse = new Adresse;
    }

    //many to many avec cours
    public function cours():array{
        return [];
    }

    //many to one avec inscription
    public function inscription():inscription{
        return new inscription();
    }

    //one to one avec adresse
    public function adresse():Adresse{
        return new Adresse();
    }
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

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

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
    public function setRole($role)
    {
        $this->role = $role; 
        return $this;
    }

    public static function selectAll(){
        $sql="select * from where role like ? ";
        return parent::database()->executeSelect($sql,[parent::$table, parent::$role]);

    }

}