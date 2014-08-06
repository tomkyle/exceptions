<?php
namespace tomkyle\Exceptions\InvalidArgumentExceptions;

use \tomkyle\Exceptions\InvalidArgumentException;

class ObjectExpected extends InvalidArgumentException
{
    protected $message = 'An object parameter expected, %s given';        
}
