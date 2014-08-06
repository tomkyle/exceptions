<?php
namespace tomkyle\Exceptions\InvalidArgumentExceptions;

use \tomkyle\Exceptions\InvalidArgumentException;

class SplFileObjectExpected extends InvalidArgumentException 
{
    protected $message = 'SplFileObject parameter expected, %s given';            
}