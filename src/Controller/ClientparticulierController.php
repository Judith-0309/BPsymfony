<?php

namespace App\Controller;
use App\Entity\Clientparticulier;
use App\Entity\Compte;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class ClientparticulierController extends AbstractController
{
    /**
     * @Route("/clientparticulier", name="clientparticulier")
     */
    public function index()
    {
        return $this->render('clientparticulier/index.html.twig' );
    }

     /**
     * @Route("/addparticulier", name="addparticulier")
     */
    public function addparticulier()
    {
        extract($_POST);
    
        $em = $this->getDoctrine()->getManager();
        $comptes=$em->getRepository(Compte::class)->find($idCompte);
       
        $particulier = new Clientparticulier();

        $compte = $particulier->getCompte();
        /* var_dump($comptes);
        die(); */
        $particulier->setNom($nom);
        $particulier->setPrenom($prenom);
        $particulier->setTelephone($telephone);
        $particulier->setGenre($Genre);
        $particulier->setEmail($Email);
        $particulier->setAdresse($Adresse);
        $particulier->setProfession($Profession);
        $particulier->setSalarie($salarie);
        $particulier->setSalaireActuel($salaire_actuel);
        $particulier->setNomEmployeur($nom_employeur);
        $particulier->setCni($cni);
        $particulier->setCompte($comptes);


        
        $em->persist($particulier);
        $em->flush();
       
        

        return $this->render('welcome/index.html.twig');
    }
    
}
