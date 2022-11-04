<?php
namespace App\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

use App\Repository\NumberRepository;

class WriteNumbersInFileCommand extends Command
{
	private NumberRepository $numberRepository;
	private static $filePath = '/var/www/app/files/numbers.txt';

	public function __construct(NumberRepository $numberRepository)
	{
		$this->numberRepository = $numberRepository;

		parent::__construct();
	}

	protected function configure():void
	{
		$this->setName('number:writefile');
	}
	
	public function execute(InputInterface $inputInterface, OutputInterface $outputInterface):int
	{

		$exit_code = 0;
		$numbers = $this->numberRepository->findAll();

		if(!$numbers)
		{
			$outputInterface->writeln('Отсутствуют данные для записи в файл');
			$exit_code = Command::FAILURE;
		}

		$prepared_numbers = [];
		$target_file = fopen(self::$filePath,'w');
		$prepared_numbers = array_map(fn($number)=> implode(',', ['Идентификатор числа: '. (string)$number->getId(), 'Значение числа: '. (string)$number->getValue()]), $numbers);

		if(!fwrite($target_file, implode("\n", $prepared_numbers)))
		{
			$outputInterface->writeln('Не удалось записать данные в файл' . self::$filePath);
			$exit_code = Command::FAILURE;
		}

		else
		{
			$outputInterface->writeln("Данные записаны в файл ".self::$filePath);
			$exit_code = Command::SUCCESS;
		}	


		fclose($target_file);

		return $exit_code;


	}


}
