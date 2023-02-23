<?php

namespace App\Controller;

use App\Entity\Outils;
use App\Entity\Urlizer;
use App\Form\OutilsType;
use App\Repository\OutilsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/outils')]
class OutilsController extends AbstractController
{
    #[Route('/', name: 'app_outils_index', methods: ['GET'])]
    public function index(OutilsRepository $outilsRepository): Response
    {
        return $this->render('outils/index.html.twig', [
            'outils' => $outilsRepository->findAll(),
        ]);
    }
    #[Route('/front', name: 'app_outils_indexfront', methods: ['GET'])]
    public function indexfront(OutilsRepository $outilsRepository): Response
    {
        return $this->render('outils/indexfront.html.twig', [
            'outils' => $outilsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_outils_new', methods: ['GET', 'POST'])]
    public function new(Request $request, OutilsRepository $outilsRepository): Response
    {
        $outil = new Outils();
        $form = $this->createForm(OutilsType::class, $outil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
            $uploadedFile->move(
                $destination,
                $newFilename
            );
            $outil->setImage($newFilename);
            $outilsRepository->save($outil, true);

            return $this->redirectToRoute('app_outils_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('outils/new.html.twig', [
            'outil' => $outil,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_outils_show', methods: ['GET'])]
    public function show(Outils $outil): Response
    {
        return $this->render('outils/show.html.twig', [
            'outil' => $outil,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_outils_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Outils $outil, OutilsRepository $outilsRepository): Response
    {
        $form = $this->createForm(OutilsType::class, $outil);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
            $uploadedFile->move(
                $destination,
                $newFilename
            );
                $outil->setImage($newFilename);
            $outilsRepository->save($outil, true);

            return $this->redirectToRoute('app_outils_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('outils/edit.html.twig', [
            'outil' => $outil,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_outils_delete', methods: ['POST'])]
    public function delete(Request $request, Outils $outil, OutilsRepository $outilsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$outil->getId(), $request->request->get('_token'))) {
            $outilsRepository->remove($outil, true);
        }

        return $this->redirectToRoute('app_outils_index', [], Response::HTTP_SEE_OTHER);
    }
}
