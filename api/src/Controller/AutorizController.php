<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AutorizController extends AbstractController
{
    /**
     * @Route("/autoriz", name="autoriz")
     */
    public function index()
    {
        return $this->render('autoriz/index.html.twig', [
            'controller_name' => 'AutorizController',
        ]);
    }
}
