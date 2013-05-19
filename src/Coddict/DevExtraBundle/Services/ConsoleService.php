<?php

namespace Coddict\DevExtraBundle\Services;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Coddict\DevExtraBundle\Utils\VirtualConsoleApplication;
use Coddict\DevExtraBundle\Utils\StringOutput;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\ArrayInput;

class ConsoleService extends AbstractService
{
	public function getCommands()
	{
		$kernel = $this->get('kernel');
		$consoleApp = new VirtualConsoleApplication($kernel);
		$consoleApp->registerCommands();
		$commands = $consoleApp->all();
		$output = array();
		// TODO: i think we must use $consoleApp->sortCommands($commands)
		// to get all commands sorted by namespace
		foreach($commands as $key => $command) 
			$output[$key] = $this->serializeCommand($command);
		return $output;
	}
	
	public function findCommand($name)
	{
		$kernel = $this->get('kernel');
		$consoleApp = new VirtualConsoleApplication($kernel);
		$consoleApp->registerCommands();
		$command = $consoleApp->find($name);
		return $command;
	}
	
	
	
	public function runCommand($name, $param)
	{
		$command = $this->findCommand($name);
		$input = null;
		$output = new StringOutput();
		
		if(is_array($param)){
			$param['command'] = $name;
			$input = new ArrayInput($param);
		}
		else{
			$param = $name.' '.$param;
			$input = new StringInput($param);
		}
			
		$statusCode = $command->run($input, $output);

		return $output;
	}
	
	protected function serializeCommand($command)
	{
		return array(
			"name" => $command->getName(),
			//"alias" => $command->getAliases(),
			"options" => $this->serializeOptions($command->getDefinition()->getOptions()),
			"arguments" => $this->serializeArguments($command->getDefinition()->getArguments()),
		);
	}
	
	protected function serializeArguments($arguments)
	{
		$output = array();
		foreach($arguments as $key => $argument)
			$output[] = array(
				"name"			=> $argument->getName(),
				"isRequired"	=> $argument->isRequired(),
				"description"	=> $argument->getDescription(),
			);
		return $output;
	}
	
	protected function serializeOptions($options)
	{
		$output = array();
		foreach($options as $key => $option)
			$output[] = array(
				"name"			=> $option->getName(),
				"shortcut"		=> $option->getShortcut(),
				"description"	=> $option->getDescription(),
			);
		return $output;
	}
}

?>
