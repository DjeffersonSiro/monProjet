<?php
/** 
 * Front controller
 *URL = localhost:8000/uri
 *uri=> uniform ressource identifier => controller/user case
 *--- controller => class
 *     use case uri
 *-- ajouter => POST localhost:8000/classe-add
 *-- modifier => POST localhost:8000/classe-up
 *-- lister => GET localhost:8000/classe
 *-- supprimer => GETT localhost:8000/classe-del
  *--- controller => cours
 *     use case uri
 *-- ajouter => POST localhost:8000/classe-add
 *-- modifier => POST localhost:8000/classe-up
 *-- lister => GET localhost:8000/classe
 *-- supprimer => POST localhost:8000/classe-delete

*/
     
//use App\Core\DataBase;

require_once("../vendor/autoload.php");
require_once('./../core/constantes.php');
require_once('./../core/fonctions.php');

dd(str_replace("public","",$_SERVER)['DOCUMENT_ROOT']);

use App\Controller\SecuriteController;
use App\Controller\ClasseController;
use App\Core\Router;
$router=new Router();

//Enregistrer une route : est une uri associee a un controller et une action

//$router->route("uri",[controller,action]);
$router->route("/",[SecuriteController::class],"connexion");
$router->route("/logout",[SecuriteController::class],"deconnexion");
$router->route("/classe",[ClasseController::class,"lister"]);
$router->route("/classe-add",[ClasseController::class,"ajouter"]);
$router->route("/classe-up",[ClasseController::class,"modifier"]);
$router->route("/classe-del",[ClasseController::class,"supprimer"]);

use App\Exceptions\RouteNotFoundException;
try {
     $router->resolve();
} catch (RouteNotFoundException $ex) {
     die($ex->message);
} 
$router->resolve();


//require_once("../models/User.php");
//require_once("../models/RP.php");
//require_once("../models/Classe.php");
//require_once("../models/Cours.php");

/*$user = new User();
$user->setId(1)
     ->setLogin("djefferson")
     ->setPassword("Delbert")
     ->setRole("Role");

echo $user->getLogin();
*/

//autloading => chargement automatique
//namespace => package : ensemble de classe du meme domaine
//namespace repertoire virtuel utiliser pour ranger nos classe
     //namespace Model => ranger mes classes Models
     //namespace controllers => ranger mes classes controllers
     //namespace core(configuration,toutes les classes reutilisables) => ranger mes classes
//composer : gestion de dependances 
//gestionnaire => telecharger + configurer dans votre projet
//dependances => dossier core est une dependance(classes reutilisable)
//Hub de dependance => site beaucoup de dependance suivant le langage

/* $RP->setId(1)
     ->setLogin("djefferson")
     ->setPassword("Delbert");

echo $RP->getRole(); */

/*
use APP\Models\AC;
$AC = new AC();

use APP\Models\Professeur;
$Professeur = new Professeur();

use APP\Models\Etudiant;
$Etudiant = new Etudiant();
*/ 

//$db->openConnexion();
//$db->executeSelect();

/*use App\Models\RP; 
$rp =new RP();
$rp->setLogin("rp1");
$rp->setPassword("rp");
$rp->insert();
echo "<pre>";
RP::selectAll();
var_dump(RP::selectAll());
echo "</pre>"; */







