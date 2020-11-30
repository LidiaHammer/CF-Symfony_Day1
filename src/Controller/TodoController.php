<?php
namespace App\Controller;

// We need to import Response, Route, Request and Controller if we want to use them
use Symfony\ Component\HttpFoundation\Response;
use  Symfony\Component\Routing\Annotation\ Route;
use Symfony\Component\ HttpFoundation\Request;
use Symfony\ Bundle\FrameworkBundle\Controller\Controller ;

class TodoController extends Controller
{
   /**
    * @Route("/", name="home_page")
    */
   public function showAction()
   {
        return $this->render('todo/index.html.twig');
   }

    /**
    * @Route("/create", name="create_page")
    */
   public  function createAction()
   {
       return  $this->render('todo/create.html.twig');
   }

    /**
    * @Route("/edit/{id}", name="edit_page")
    */
   public  function editAction($id)
   {
       return  $this->render('todo/edit.html.twig');
   }

    /**
    * @Route("/details/{id}", name="details_page")
    */
   public  function detailsAction($id)
   {
        return $this->render('todo/details.html.twig' );
   }
}
?>