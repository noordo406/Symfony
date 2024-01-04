<?php

namespace App\Entity;

class Arme {
    public static $armes = [];

    public function __construct(private $nom, private $desc, private $degats)
    {
        self::$armes[]= $this;
    }

    public function getNom() {return $this->nom;}
    public function getDesc() {return $this->desc;}
    public function getDegats() {return $this->degats;}

    public static function creerArme(){
        $a1 = new Arme("Epée", "Machin qui sert à couper des têtes", 5);
        $a2 = new Arme("Hache", "Machin qui sert à couper des arbres", 8);
        $a3 = new Arme("Arc", "Machin qui propulse des machins qui se plantent dans des choses", 3);
    }

    public static function getArmeByName($nom){
        foreach(self::$armes as $value){
            if (str_replace("é", "e", $value->nom) === $nom) {
                return $value;
            }
        }
    }
}