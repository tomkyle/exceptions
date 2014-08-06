<?php
namespace tomkyle\Exceptions\InvalidArgumentExceptions;

use \tomkyle\Exceptions\InvalidArgumentException;

class DateTimeExpected extends InvalidArgumentException
{
    protected $message = 'DateTime parameter expected, %s given';        
}
