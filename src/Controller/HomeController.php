<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller
 * @author jaures kano <ruddyjaures@mail.com>
 */
class HomeController extends AbstractController
{

    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('home/home_index.html.twig');
    }

}