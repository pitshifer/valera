<?php

namespace App\Controller;

use App\Entity\Temperature;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function index()
    {
        /** @var Temperature $lastTemperature */
        $lastTemperature = $this->getDoctrine()
            ->getRepository(Temperature::class)
            ->getLast();

        return $this->render("default/index.html.twig", ["lastTemperature" => $lastTemperature]);
    }
}