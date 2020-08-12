<?php

namespace App\Controller;
use App\Entity\Compte;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    /**
     * @Route("/compte", name="compte")
     */
    public function index()
    {
        return $this->render('compte/index.html.twig');
    }
    /**
     * @Route("/addcompte", name="addcompte")
     */
    public function addcompte()
    {
        extract($_POST);
        /*var_dump($_POST);*/
       
        $ouvCompte = new Compte();
        $ouvCompte->setTypeCompte($typeCompte);
        $ouvCompte->setNumeroCompte($NumeroCompte);
        $ouvCompte->setCleRib($CleRib);
        $ouvCompte->setEtatCompte($EtatCompte);
        $ouvCompte->setDepotInitial($DepotInitial);
        $ouvCompte->setDateOuverture($DateOuverture);

        $em = $this->getDoctrine()->getManager();
        $em->persist($compte);
        $em->flush();
        $data['ok'] = 0;
        

        return $this->render('compte/index.html.twig',$data );
    }
}
