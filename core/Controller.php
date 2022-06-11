<?php
namespace App\Core;
class Controller{
    protected Request $request;
    public function __construct(Request $request){
        $this->request = $request;
    }

    public function redirecToRoute(string $uri){
        $uri=WEB_URL."".$uri;
        header("location:$uri");
    }

    public function render(string $path){
        require_once(ROOT."views/".$path.".html.php");
    }
}