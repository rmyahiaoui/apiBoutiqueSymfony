<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class FirstController extends AbstractController
{

    public function index(SessionInterface $session)
{
    // stores an attribute for reuse during a later user request
    $session->set('foo', 'bar');

    // gets the attribute set by another controller in another request
    $foobar = $session->get('foobar');

    // uses a default value if the attribute doesn't exist
    $filters = $session->get('filters', []);

}
    /**
     * @Route("/first/test2", name="test2")
     */
    public function test2(Request $request)
{


    $page = $request->query->get('page', 1);
    var_dump($this->getParameter('kernel.project_dir'));
    return $this->render('first/index.html.twig', [
        'controller_name' => 'FirstController',
    ]);    
}

    /**
     * @Route("/article/{slug}", name="blog_post")
     */
    public function show(string $slug)
    {
        var_dump($slug);
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }
}
