<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

use App\Service\NumberService;


class RetrieveNumberCommand extends Command
{
	private NumberService $numberService;

	protected static $defaultName = 'number:retrieve';

	public function __construct(NumberService $numberService)
	{
		$this->numberService = $numberService;
		parent::__construct();

	}

	protected function configure()
	{
		$this->addArgument('number_id', InputArgument::REQUIRED);


	}


	public function execute(InputInterface $inputInterface, OutputInterface $outputInterface):int
	{
		$number_id = (int)$inputInterface->getArgument('number_id');

		$result = $this->numberService->getNumber($number_id);

		$outputInterface->writeln($result['message']);

		return Command::SUCCESS;
	}



}