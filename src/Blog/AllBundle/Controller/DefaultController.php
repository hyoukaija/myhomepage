<?php

namespace Blog\AllBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Editor;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	
        return $this->render('BlogAllBundle:Default:index.html.twig',[
        		'name' => $name,
        	]);
    }



    // public function showAction()
    // {
    // 	$editorId = ;
    // 	$editor = $this->getDoctrine()
    // 		->getRepository('AppBundle:Editor')
    // 		->find($editorId);

    // 	if(!$editor){
    // 		throw $this->createNotFoundException(
    // 			'No Editor found for id '.$editorId
    // 			);
    // 	}else{
    // 		return new Response('Saved new editor with id '.$editor->getTitle());
    // 	}
    // }
}





