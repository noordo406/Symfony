<?php

namespace App\Entity;

class Personnage {
    public static $personnages = [];

    public function __construct(public $pseudo, public $age, public $sexe, public $carac = [])
    {
        self::$personnages[]= $this;
    }

    public static function creerPersonnage(){
        $p1 = new Personnage("Bruno", 25, true, [
            "force" => 3,
            "agi" =>  2,
            "intel" =>  4]);
        $p1 = new Personnage("Racon", 26, true, [
            "force" => 2,
            "agi" =>  3,
            "intel" => 4]);
        $p1 = new Personnage("Yjk", 21, false, [
            "force" => 2,
            "agi" =>  5, 
            "intel" => 1]);
    }
}