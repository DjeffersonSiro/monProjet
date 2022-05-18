<?php

use professeur as GlobalProfesseur;

class professeur extends User{
    private string $grade;

    public function __construct(){
        $this->role="ROLE_PROFFESEUR";
    }

    //one to many avec cours
    public function cours():array{
        return [];
    }
    //many to many avec module
    public function modules():array{
        return [];
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
      // redefinition => evolution
    // 1- heritage de methode
    // 2- possibilite de redefinir = changer son comportement
     /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role; 
        return $this;
    }
}