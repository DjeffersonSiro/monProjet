<?php
//Front controller
// URL = localhost:

use App\Core\DataBase;

require_once("../vendor/autoload.php");


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
use App\Models\RP; 
$rp =new RP();
$rp->setLogin("rp1");
$rp->setPassword("rp");
$rp->insert();
echo "<pre>";
RP::selectAll();
var_dump(RP::selectAll());
echo "</pre>";







