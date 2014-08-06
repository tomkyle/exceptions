<?php
namespace tomkyle\Exceptions\InvalidArgumentExceptions;

use \tomkyle\Exceptions\InvalidArgumentException;

class StringExpected extends InvalidArgumentException
{
    protected $message = 'String parameter expected, %s given';    
}
