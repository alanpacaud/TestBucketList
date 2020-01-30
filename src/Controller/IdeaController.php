<?php

namespace App\Controller;

use App\Entity\Idea;
use App\Entity\Serie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/idea",name="idea_")
 */
class IdeaController extends Controller
{
    /**
     * @Route("/", name="list")
     */
    public function list(EntityManagerInterface $entityManager)
    {
        $ideaRepository = $entityManager->getRepository(Idea::class);
        $ideas =$ideaRepository->findAll();


        return $this->render('idea/list.html.twig', compact('ideas'));
    }
    /**
     * @Route("/{id}", name="detail", requirements={"id": "\d+"})
     */
    public function detail($id, EntityManagerInterface $entityManager)
    {
        $ideaRepository = $entityManager->getRepository(Idea::class);
        $idea =$ideaRepository->find($id);
        if(empty($idea)){
            return $this->createNotFoundException('Cette idée n\'existe pas!');
        }


        return $this->render('idea/detail.html.twig', compact('idea'));
    }
}
