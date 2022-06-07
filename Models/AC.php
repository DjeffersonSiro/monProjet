<?php
namespace App\Models;
//AC herite de user
class AC extends User{
    public function __construct(){
        parent:$role="ROLE_AC";
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

    public static function selectAll(){
        $sql="select * from where role like ? ";
        return parent::database()->executeSelect($sql,[parent::$table, parent::$role]);

    }
}