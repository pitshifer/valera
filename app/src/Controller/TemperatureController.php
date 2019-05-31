<?php

namespace App\Controller;

use App\Entity\Temperature;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemperatureController extends AbstractController
{
    /**
     * @Route("/temperature/create", name="temperature")
     */
    public function create()
    {
        $temperature = new Temperature();
        $temperature->setCreatedAt(new \DateTime('now'));
        $temperature->setValue(rand(23, 28));

        $manager = $this->getDoctrine()->getManager();
        $manager->persist($temperature);
        $manager->flush();

        return new Response("New record with id = {$temperature->getId()}");
    }
}
