<?php

namespace Doctrine\WorkbenchConverterBundle\Entity;

use Symfony\Component\Form\FormBuilder;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @Entity
 */
class Document extends AbstractType
{
	/** @var File  - not a persistent field! */
	private $file;

	/** @var string
	 * @Column(type="string")
	 */
	private $filePersistencePath;

	/** @var string */
	protected static $uploadDirectory = null;

	static public function setUploadDirectory($dir)
	{
		self::$uploadDirectory = $dir;
	}

	static public function getUploadDirectory()
	{
		if (self::$uploadDirectory === null) {
			throw new \RuntimeException("Trying to access upload directory for profile files");
		}
		return self::$uploadDirectory;
	}

	/**
	 * Assumes 'type' => 'file'
	 */
	public function setFile(File $file)
	{
		$this->file = $file;
	}

	public function getFile()
	{
		return new File(self::getUploadDirectory() . "/" . $this->filePersistencePath);
	}

	public function getFilePersistencePath()
	{
		return $this->filePersistencePath;
	}
	
	public function getName() {
		return "workbenchfile";
	}


	public function processFile()
	{
		/*if (!($this->file instanceof UploadedFile)) {
			return false;
		}*/
		return $this->getFile()->getPath();
		//$uploadFileMover = new UploadFileMover();
		//$this->filePersistencePath = $uploadFileMover->moveUploadedFile($this->file, self::getUploadedDirectory());
	}
	
	
	public function buildForm(FormBuilder $builder, array $options)
    {
		$builder->add('workbenchfile','workbenchfile');
	}
}
