<?php
namespace App\Models;
//RP herite de User (extends = herite)
class RP extends User{
    public function __construct(){

        parent::__construct();
        parent::$role="ROLE_RP";
    }
    // redefinition => evolution
    // 1- heritage de methode
    // 2- possibilite de redefinir = changer son comportement
     /**
     * Set the value of role
     *
     * @return  self
     */ 

    
    //public function setRole($role)
    //{
      //  $this->role = $role; 
       // return $this;
    //} 
    public static function selectAll(){
        $sql="select * from ".parent::$table." where role like ? ";
    return parent::database()->executeSelect($sql,[parent::$role]);

    }
}