<?php

namespace App\Infraestructure\Exceptions;
use Exception;

class CustomException extends Exception
{
    public function __construct(string $message, int $code = 400)
    {
        parent::__construct($message, $code);
    }
}
