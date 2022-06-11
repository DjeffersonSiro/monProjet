<?php
namespace App\Controllers;
use App\Core\Request;

use App\Core\Controller;
class SecuriteController extends Controller{

    public function Connexion(){
    // pour le formulaire on aura toujours deux choses a faire
        //1-Affichage du formulaire => GET 
            //Request
        //2-soumission des donnees => POST
            if ($this->request->isGet()){
                require_once(ROOT."views/securite/login.html.php");
            } if ($this->request->isPost()){
                dd("Soumission des donnees du formulaire");
            }
    }

    public function deconnexion(){ 
        $this->redirecToRoute(""); 
    }
}