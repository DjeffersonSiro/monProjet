<?php
namespace App\Models;
use APP\core\Model;
class Cours extends Model{
    private int $id;
    private string $heureDebut;
    private string $heureFin;
    //classe de php on mets "\" namespace racine
    private \DateTime $dateCours;


    public function __construct(){
        parent::$table="cours";
    }


  // many to one avec classe
    public function classe():Classe{
        return new Classe();
    }

    //many to one avec professeur
    public function professeur():Professeur{
        $sql="select u.* from cours c,
            user u where c.proffeseur_id=u.id and c.id=?
            and role like 'ROLE_PROFFESSEUR'";
            parent::selectWhere($sql,[$this->id],true);
        return new Professeur();
    }

    //many to one avec module
    public function module():Module{
        $sql="select m.* from cours c,
            module m where c.module_id=m.id and c.id=?";
        parent::selectWhere($sql,[$this->id],true);
        return new Module();
    }

    //many to many avec etudiant
    public function etudiant():Etudiant{
        $sql="select e.* from etudiant e,
            edutdiand e where c.etudiand_id=e.id and c.id={$this->id}";
        return new Etudiant();
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
     * Get the value of heureDebut
     */ 
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set the value of heureDebut
     *
     * @return  self
     */ 
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get the value of heureFin
     */ 
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set the value of heureFin
     *
     * @return  self
     */ 
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get the value of dateCours
     */ 
    public function getDateCours()
    {
        return $this->dateCours;
    }

    /**
     * Set the value of dateCours
     *
     * @return  self
     */ 
    public function setDateCours($dateCours)
    {
        $this->dateCours = $dateCours;

        return $this;
    }
    
}