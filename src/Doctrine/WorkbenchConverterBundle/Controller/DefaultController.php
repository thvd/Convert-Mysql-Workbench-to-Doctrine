<?php

namespace Doctrine\WorkbenchConverterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
	
	public function indexAction()
	{
		//$form = $this->createFormBuilder(array());
		
		return $this->render('DoctrineWorkbenchConverterBundle:Default:index.html.twig', array('name' => 'piete'));
	}
	
	
	public function convertAction(Request $request) 
	{
		
		
		return $this->render('DoctrineWorkbenchConverterBundle:Default:convert.html.twig');
	}
}
