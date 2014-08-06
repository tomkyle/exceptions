<?php
namespace tomkyle\Exceptions\InvalidArgumentExceptions;

use \tomkyle\Exceptions\InvalidArgumentException;

class ArrayOrArrayObjectExpected extends InvalidArgumentException
{
    protected $message = 'Array or AraryObject parameter expected, %s given';        
}
