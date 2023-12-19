<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'home_homepage')]
    public function indexAction(): Response
    {
        return $this->render('Default/index.html.twig');
    }

    #[Route('/philosophie', name: 'home_philosophy')]
    public function philosophyAction()
    {
        return $this->render('Default/philosophy.html.twig');
    }

    #[Route('/neurochirurgie-allgemeines', name: 'home_neurochirurgie')]
    public function neurochirurgieAction()
    {
        return $this->render('Default/neurochirurgie.html.twig');
    }

    #[Route('/notfall', name: 'home_emergency')]
    public function emergencyAction()
    {
        return $this->render('Default/emergency.html.twig');
    }

    #[Route('/impressum', name: 'home_imprint')]
    public function imprintAction()
    {
        return $this->render('Default/imprint.html.twig');
    }

    #[Route('/datenschutz', name: 'home_protection')]
    public function protectionAction()
    {
        return $this->render('Default/protection.html.twig');
    }

    #[Route('/blog/{post}', name: 'home_blog_post')]
    public function blogAction($post)
    {
        return $this->render('AppBundle:Blog:'.$post.'.html.twig');
    }
}
