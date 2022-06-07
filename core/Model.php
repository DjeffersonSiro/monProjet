<?php
namespace App\Core;
abstract class Model implements IModel{


    protected static Database|null $database=null;// l'instance est nulle

    protected static string $table;

    public function insert(){

    }
    public function update(){

    }
    public static function database():Database{
        //design pattern singleton=> gain de memoire
        if (self::$database==null) {
            self::$database=new Database; 
        }
        return self::$database;
    }


    public static function delete(int $id){
        $sql="delete from ".self::$table." where id=?";
       return self::$database->executeUpdate($sql,[$id]);

    }
    public static function selectAll(){
        $sql="select * from ".self::$table;
    return self::database()->executeSelect($sql);

    }
    public static function selectBy(int $id){
        $sql = "select * from ".self::$table." where id=?";
       return self::$database->executeUpdate($sql,[$id]);
    }
    public static function selectWhere(string $sql,array $data=[],$single=false){
        return self::$database->executeUpdate($sql,$data,$single);
    }
}  