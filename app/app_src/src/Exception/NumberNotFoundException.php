<?php
namespace App\Exception;
use App\Exception\ExceptionContracts\NotFound;


class NumberNotFoundException extends \Exception implements NotFound
{
	
}  