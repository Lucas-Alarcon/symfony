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
        $images = ['image1' => 'Forêt', 'image2' => 'Pont 1', 'image3' => 'Pont 2', 'image4' => 'Jardin', 'image5' => 'Lac', 'image6' => 'Pont 3'];

        return $this->render('site/galerie.html.twig', [
            'qty' => 6,
            'images' => $images,
        ]);
    }

    /**
     * @Route("/galerie/{photo}", name="photo")
     */
    public function photo(string $photo)
    {
        return $this->render('site/photo.html.twig', [
            'photo' => $photo,
        ]);
    }
}
