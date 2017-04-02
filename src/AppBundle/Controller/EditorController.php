<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Editor;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EditorController extends Controller
{
	public function createAction()
	{
		// $editor = new Editor();

		// $form = $this->createFormBuilder($editor)
		// 	->add('title')
		// 	->add('text')
		// 	->add('save',SubmitType::class, array('label' => 'Create Task'))
		// 	->getForm();

		// $form->handleRequest($request);

		// if($form->isValid())
		// {
		// 	$em = $this->getDoctrine()->getManager();
		// 	$em->persist($editor);
		// 	$em->flush();
		// }
		
		return $this->render('welcome/new.html.twig');
	}
}