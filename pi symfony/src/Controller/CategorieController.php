<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/afficherr", name="display_cat")
     */
    public function index(): Response
    {
        $cat=$this->getDoctrine()->getManager()->getRepository(Categorie::class)->findAll();
        return $this->render('categorie/list.html.twig', [
            'a'=>$cat
        ]);
    }

    /**
     * @Route("/addcat", name="addcat")
     */
    public function addcategorie(Request $request): Response
    {
        $foot = new Categorie();
        $form=$this->createForm(CategorieType::class,$foot);
        $form->HandleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($foot);
            $em->flush();
            return $this->redirectToRoute('display_cat');
        }
        return $this->render('categorie/index.html.twig',['a'=>$form->createView()]);

    }

     /**
     * @Route("/supprimer/{id}", name="supp_cat")
     */
    public function supprimer(Categorie $foot): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em-> remove($foot);
        $em->flush();
        return $this->redirectToRoute('display_cat');
    }

      /**
     * @Route("/modifierMatch/{id}", name="modifiercat")
     */
    public function modifierTerrain(Request $request,$id): Response
    {
        $foot = $this->getDoctrine()->getManager()->getRepository(Categorie::class)->find($id);
        $form=$this->createForm(CategorieType::class,$foot);
        $form->HandleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em= $this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('display_cat');
        }
        return $this->render('categorie/update.html.twig',['a'=>$form->createView()]);

    }


}
