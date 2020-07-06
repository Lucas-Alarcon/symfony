<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GalerieController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('site/index.html.twig', [

        ]);
    }

    /**
     * @Route("/galerie", name="galerie")
     */
    public function galerie()
    {
        $images = ['image1', 'image2', 'image3', 'image4','image5', 'image6'];

        return $this->render('site/galerie.html.twig', [
            'qty' => 5,
            'images' => $images,
        ]);
    }
}
