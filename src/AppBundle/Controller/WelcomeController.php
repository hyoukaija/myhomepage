<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Editor;


class WelcomeController extends Controller
{
	

	/**
	 *@Route("/",name="home_page")
	 */


	public function showAction()
	{	
		
		return $this->render('welcome/show.html.twig',[
				
 			]);
	}

	public function callmeAction()
	{
		return $this->render('welcome/callme.html.twig');
	}

	

}