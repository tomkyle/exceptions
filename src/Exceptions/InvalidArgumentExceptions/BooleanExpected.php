<?php
namespace tomkyle\Exceptions\InvalidArgumentExceptions;

use \tomkyle\Exceptions\InvalidArgumentException;

class BooleanExpected extends InvalidArgumentException
{
    protected $message = 'Boolean parameter expected, %s given';        
}
