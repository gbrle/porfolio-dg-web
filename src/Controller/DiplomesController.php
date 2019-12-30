<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DiplomesController extends AbstractController
{
    /**
     * @Route("/diplomes", name="diplomes")
     */
    public function index()
    {
        return $this->render('diplomes/index.html.twig', [
            'controller_name' => 'DiplomesController',
        ]);
    }
}
