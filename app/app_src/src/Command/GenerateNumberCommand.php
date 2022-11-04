<?php
namespace App\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

use App\Service\NumberService;


class GenerateNumberCommand extends Command
{
	private NumberService $numberService;

	protected static $defaultName = 'number:generate';


	public function __construct(NumberService $numberService)
	{
		$this->numberService = $numberService;

		parent::__construct();
	}


	public function execute(InputInterface $inputInterface, OutputInterface $outputInterface):int
	{
		$result = $this->numberService->generateNumber();
		$outputInterface->writeln($result['message']);

		return Command::SUCCESS;

	}

}
