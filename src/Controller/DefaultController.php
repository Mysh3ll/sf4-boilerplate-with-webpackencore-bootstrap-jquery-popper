<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route(path="/", name="home_index")
     * @return Response
     */
    public function index()
    {
        return $this->render('base.html.twig', []);
    }
}
