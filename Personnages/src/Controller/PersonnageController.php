<?php

namespace App\Controller;

use App\Entity\Personnage;
use App\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnageController extends AbstractController
{
    #[Route('', name: 'accueil')]
    public function index(): Response
    {
        return $this->render('personnage/index.html.twig', [
        ]);
    }
    #[Route('personnages', name: 'personnages')]
    public function persos(): Response
    {
        Personnage::creerPersonnage();

        return $this->render('personnage/persos.html.twig', [
            "tabPersonnage" => Personnage::$personnages,
        ]);
    }
    #[Route('personnages/{nom}', name: 'afficherPersonnage')]
    public function afficherPersonnage($nom): Response
    {
        Personnage::creerPersonnage();
        $perso = Personnage::getPersonnageByName($nom);

        return $this->render('personnage/perso.html.twig', [
            "perso" => $perso
        ]);
    }
    #[Route('armes', name: 'armes')]
    public function armes(): Response
    {
        Arme::creerArme();

        return $this->render('personnage/armes.html.twig', [
            "tabArmes" => Arme::$armes,
        ]);
    }
    #[Route('armes/{nom}', name: 'afficherArme')]
    public function afficherArme($nom): Response
    {
        Arme::creerArme();
        $arme = Arme::getArmeByName($nom);

        return $this->render('personnage/arme.html.twig', [
            "arme" => $arme
        ]);
    }
}
