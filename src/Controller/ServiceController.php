<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/leistungen', name: 'service')]
    public function indexAction()
    {
        return $this->render('Service/index.html.twig');
    }

    #[Route('/diagnostik', name: 'service_diagnostik')]
    public function diagnostikAction()
    {
        return $this->render('Service/diagnostik.html.twig');
    }

    #[Route('/konservative-therapie', name: 'service_konservativetherapie')]
    public function konservativAction()
    {
        return $this->render('Service/konservativetherapie.html.twig');
    }

    #[Route('/konservative-therapie/stosswellentherapie', name: 'service_stosswellentherapie')]
    public function stosswellenAction()
    {
        return $this->render('Service/stosswellentherapie.html.twig');
    }

    #[Route('/minimalinvasive-therapie', name: 'service_minimalinvasivetherapie')]
    public function minimalAction()
    {
        return $this->render('Service/minimalinvasivetherapie.html.twig');
    }

    #[Route('/operative-therapie', name: 'service_operativetherapie')]
    public function operativAction()
    {
        return $this->render('Service/operativetherapie.html.twig');
    }

}
