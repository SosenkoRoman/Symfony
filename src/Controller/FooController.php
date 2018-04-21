<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class FooController extends AbstractController
{
    /**
     * @Route("/foo", name="foo")
     */
    public function index()
    {
        return $this->render('foo/index.html.twig', [
            'controller_name' => 'FooController',
        ]);
    }
    /**
    *@Route("/", name="hello_page")
    */
    public function hello(Request $request)
    {
    $someName= $request->query->get ('name');
    return $this->render('hello_page.html.twig', ['someAwesomeVariable' => 'Welcome from FooController!', 'getName'=> $someName]);
    }
    /**
    *@Route("/blog/{page}", name="single_page", requirements={"page"="[A-Za-z]+"})
    *@param string $page
    *
    */
    public function page(string $page)
    {
        return $this->render('foo/page.html.twig', ['blogPage'=> $page]);
    }
}
