<?php
namespace App\Exception;
use App\Exception\ExceptionContracts\SemanticError;


class UserAlreadyExistsException extends \Exception implements SemanticError
{

}