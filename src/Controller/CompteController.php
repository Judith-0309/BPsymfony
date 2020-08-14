<?php

namespace App\Controller;
use App\Entity\Compte;
use PhpParser\Node\Expr\Isset_;
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
        $em = $this->getDoctrine()->getManager();
        if(isset($_POST['envoyer']))
        {
            extract($_POST);
            //var_dump($_POST);
            //die;
            $ouvCompte = new Compte();
        $ouvCompte->setTypeCompte($typeCompte);
        $ouvCompte->setNumeroCompte($NumeroCompte);
        $ouvCompte->setCleRib($CleRib);
        $ouvCompte->setEtatCompte($EtatCompte);
        $ouvCompte->setDepotInitial($DepotInitial);
        $ouvCompte->setDateOuverture($DateOuverture);

       
        $em->persist($ouvCompte);
        $em->flush();
        }
       
       $idCompte=$em->getRepository(Compte::class)->findOneBy(array(),array('id'=>'DESC'));
       /* var_dump($idCompte->getId());
       die(); */
        
       $data['idCompte']=$idCompte->getId();
        

        return $this->render('clientparticulier/index.html.twig',$data );
    }
}
