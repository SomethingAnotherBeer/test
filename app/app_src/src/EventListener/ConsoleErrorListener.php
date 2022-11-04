<?php
namespace App\EventListener;
use Symfony\Component\Console\Event\ConsoleErrorEvent;
use Symfony\Component\Console\Command\Command;

class ConsoleErrorListener
{
	public function onConsoleError(ConsoleErrorEvent $event)
	{
		$exception = $event->getError();
		$output = $event->getOutput();


		$output->writeln($exception->getMessage());
		

	}
}