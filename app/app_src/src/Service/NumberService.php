<?php
namespace App\Service;

use App\Repository\NumberRepository;
use App\Exception\NumberNotFoundException;
use App\Entity\Number;

class NumberService
{
	private NumberRepository $numberRepository;

	public function __construct(NumberRepository $numberRepository)
	{
		$this->numberRepository = $numberRepository;
	}



	public function generateNumber():array
	{
		$generated_value = rand(0,500);
		$number = new Number();
		$number->setValue($generated_value);

		$this->numberRepository->save($number, true);

		return ['message'=>'Число успешно создано, идентификатор числа: '. $number->getId()];

	}


	public function getNumber(int $number_id):array
	{
		$number = $this->numberRepository->find($number_id);

		if(!$number) throw new NumberNotFoundException("Заданное число не найдено");

		return ['message' => 'Найдено число со значением: '. $number->getValue()];

	}

}

