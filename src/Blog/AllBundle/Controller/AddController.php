<?php

namespace Blog\AllBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AllBundle\Entity\Article;
use Symfony\Component\HttpFoundation\Request;

class AddController extends Controller
{
	public function articleAction()
	{
		return $this->render('BlogAllBundle:Add:article.html.twig');
	}
}