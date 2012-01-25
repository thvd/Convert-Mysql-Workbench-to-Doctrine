<?php

namespace Doctrine\WorkbenchConverterBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\WorkbenchConverterBundle\Entity\Document;


class DefaultController extends Controller
{
	
	public function indexAction()
	{
		
		$formBuilder = $this->createFormBuilder();
		$formBuilder->add('workbenchfile', 'file');
		
		$form = $formBuilder->getForm();
		
		$token = $form->get('_token')->getData();
		
		return $this->render('DoctrineWorkbenchConverterBundle:Default:index.html.twig', array(
			'csrf_token' => $token,
		));
	}
	
	
	public function convertAction(Request $request) 
	{
		$output = '';
		
		$formBuilder = $this->createFormBuilder();
		$formBuilder->add('workbenchfile', 'file');
		
		$form = $formBuilder->getForm();
		
		$token = $form->get('_token')->getData();
        
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
			if ($form->isValid()) {
				$file = $form->get('workbenchfile')->getData();
				
				$setup = array(
					'enhancedManyToManyDetection'	=> 'false',
					'bundleNamespace'				=> 'Doctrine\WorkbenchConverterBundle',
					'indentation' 					=> 4,
				);
				
				// create a formatter
				$formatter = new \MwbExporter\Formatter\Doctrine2\Annotation\Loader($setup);
				
				// parse the mwb file
				$mwb = new \MwbExporter\Core\Workbench\Document($file->getPathname(), $formatter);
				
				// show the export output of the mwb file
				$output = $mwb->display();
				//$output = preg_replace('/\n/', PHP_EOL, $output);
				
				//echo "</textarea>";
				
				// save as zip file in current directory and use .php as file endings
				//echo "<br><br>"; 
				//$output .= $mwb->zipExport(__DIR__, 'php');
				
				// show some information about used memory
				//echo "<br><br>";
				//echo (memory_get_peak_usage(true) / 1024 / 1024) . " MB used";
				//echo "<br>";
				
				// show the time needed to parse the mwb file
				//$end = microtime(true);
				//echo  sprintf('%0.3f', $end-$start) . " sec needed";
			} else {
				$output = 'afdfasadsa';
			}
		}
		
		$formView = $form->createView();
		
		
		return $this->render('DoctrineWorkbenchConverterBundle:Default:convert.html.twig', array(
			'output' => $output,
			'form' => $formView,
		));
	}
}
