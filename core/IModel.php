<?php
namespace App\Core;
interface IModel{

    public function insert();
    public function update();
    public static function delete(int $id);
    public static function selectAll();
    public static function selectBy(int $id);
    public static function selectWhere(string $sql,array $data=[],$single=false);
    //select * from classe where niveau like 'L1'
    //select * from user where login like'djefferson' and password like 'Delbert'

    /*Methode d'instances => s'applique sur un objet et utiliser par l'objet
     $classe = new Clsee();
     $classe->setLibelle("L2 GLRS")
     $classe->insert() //insert into classe (libelle) value('L2 GLRS')
     $classe->setId(1)
     $classe->delete() //delete from classe where id=1
    * /


    /*Methode satique => s'applique sur une classe et n'utilise l'etat d'un onjet
        classe::methode()
        classe::delete(1)
        classe::SelecttAll() : select *
    */
}