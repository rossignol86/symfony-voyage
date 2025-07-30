<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route('/amerique', name: 'amerique')]
    public function amerique(): Response
    {
        return $this->render('pages/amerique.html.twig');
    }

    #[Route('/europe', name: 'europe')]
    public function europe(): Response
    {
        return $this->render('pages/europe.html.twig');
    }

    #[Route('/asie', name: 'asie')]
    public function asie(): Response
    {
        return $this->render('pages/asie.html.twig');
    }

    #[Route('/france', name: 'france')]
    public function france(): Response
    {
        return $this->render('pages/france.html.twig');
    }

    #[Route('/espagne', name: 'espagne')]
    public function espagne(): Response
    {
        return $this->render('pages/espagne.html.twig');
    }

    #[Route('/italie', name: 'italie')]
    public function italie(): Response
    {
        return $this->render('pages/italie.html.twig');
}
}
