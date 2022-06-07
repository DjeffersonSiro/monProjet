<?php
namespace APP\Exceptions;
class BdConnexionException extends \PDOException{
    public $message="Erreur de connexion veuillez contacter votre admin";
}