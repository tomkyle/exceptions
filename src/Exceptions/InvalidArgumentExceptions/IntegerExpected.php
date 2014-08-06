<?php
namespace tomkyle\Exceptions\InvalidArgumentExceptions;

use \tomkyle\Exceptions\InvalidArgumentException;

class IntegerExpected extends InvalidArgumentException
{
    protected $message = 'Integer parameter expected, %s given';        
}
