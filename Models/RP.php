<?php
//RP herite de User (extends = herite)
class RP extends User{
    public function affiche(){
        echo $this->id;
    }
}