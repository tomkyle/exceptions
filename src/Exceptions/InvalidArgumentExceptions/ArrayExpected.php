<?php
namespace tomkyle\Exceptions\InvalidArgumentExceptions;

use \tomkyle\Exceptions\InvalidArgumentException;

class ArrayExpected extends InvalidArgumentException
{
    protected $message = 'Array parameter expected, %s given';        
}
