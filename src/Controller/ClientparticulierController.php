<?php

namespace App\Controller;
use App\Entity\Clientparticulier;
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
        /*var_dump($_POST);*/
       
        $particulier = new Clientparticulier();
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

        $em = $this->getDoctrine()->getManager();
        $em->persist($particulier);
        $em->flush();
        $data['ok'] = 0;
        

        return $this->render('clientparticulier/index.html.twig',$data );
    }
    
}
