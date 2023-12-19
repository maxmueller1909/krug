<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PracticeController extends AbstractController
{
    #[Route('/praxis', name: 'practice_practice')]
    public function practiceAction()
    {
        return $this->render('Practice/practice.html.twig', array(
            // ...
        ));
    }

    #[Route('/team', name: 'practice_team')]
    public function teamAction()
    {
        return $this->render('Practice/team.html.twig', array(
            // ...
        ));
    }

}
