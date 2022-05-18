<?php
 // classe concrete lorsqu'elle est istanciable
// par defaut une classe est concrete
//classe abstraite lorsqu'elle estn'est instanciable(elle ne produit pas d'objet)
abstract class User{
    //Attributs instances
    // un attributs instances ce sont des attributs qui sont specifique a un objet 
    protected int $id;
    protected string $login;
    protected string $password;
    protected string $role;
    
    //Attributs static
    // un attributs static ce sont des attributs qui sont commun a l'ensemble des objets



    //Methode
    //constructeur par defaut
    public function __construct(){

    }

    //Getters
    // ce sont des methodes qui permet de mettre la valeur d'un attribut
    // en protected ou private disponible au niveau de l'intervaface objet

 

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
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

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





