<?php
namespace Doctrine\WorkbenchConverterBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class MysqlWorkbenchFileType extends AbstractType 
{
	public function buildForm(FormBuilder $builder, array $options)
	{
		$builder->add('attachment', 'file');
	}
	
	public function getName()
	{
		return 'mysqlworkbenchfile';
	}
	
}
