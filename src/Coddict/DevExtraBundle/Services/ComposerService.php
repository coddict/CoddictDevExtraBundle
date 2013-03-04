<?php

namespace Coddict\DevExtraBundle\Services;



class ComposerService extends AbstractService
{
	protected $composerObject;
	
	public function getComposerContent()
	{
		$composerPath = $this->get('kernel')->getContainer()->getParameter('kernel.root_dir') . '/../composer.json';
		if(!file_exists($composerPath)) 
			throw new \Exception("the file composer.json not found");
		return file_get_contents($composerPath);
	}
	/**
	*	We load the composer.
	*/
	protected function loadComposer()
	{
		$this->composerObject = json_decode($this->getComposerContent(), true);
	}  
	protected function saveComposer()
	{
		$composerPath = $this->get('kernel')->getContainer()->getParameter('kernel.root_dir') . '/../composer.json';
		if(!file_exists($composerPath)) 
			throw new \Exception("the file composer.json not found");
		if(!$this->composerObject) 
			throw new \Exception("composer is not loaded");
		file_put_contents($composerPath, json_encode($this->composerObject,JSON_PRETTY_PRINT));
	}
	public function addDependency($name, $version)
	{
		$this->loadComposer();
		if(isset($this->composerObject["require"][$name]))
			throw new \Exception("Depencendy ".$name." already exist, use update to change this depencency");
		$this->composerObject["require"][$name] = $version;
		$this->saveComposer();
	}
	
	public function updateDependency($name, $version)
	{
		$this->loadComposer();
	}
	
	public function existDependency($name)
	{
		$this->loadComposer();
		return isset($this->composerObject["require"][$name]);
	}
	
	public function removeDependency($name)
	{
		$this->loadComposer();
		if(!isset($this->composerObject["require"][$name]))
			throw new \Exception("Depencendy ".$name."not found");
		unset($this->composerObject["require"][$name]);
		$this->saveComposer();
	}
}

?>
