<?php
namespace tomkyle\Exceptions\InvalidArgumentExceptions;

use \tomkyle\Exceptions\InvalidArgumentException;

class FloatExpected extends InvalidArgumentException
{
    protected $message = 'Float parameter expected, %s given';        
}

