<?php
namespace App\Controllers;

use App\Core\IController;
use App\Core\Controller;

class ClasseController extends Controller implements IController {


    public function lister(){
        $this->render("classe/liste");
    }

    public function ajouter(){

    }

    public function supprimer(){

    }

    public function modifier(){

    }
}