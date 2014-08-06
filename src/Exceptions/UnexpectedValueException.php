<?php
namespace tomkyle\Exceptions;
use \tomkyle\Exception;

class UnexpectedValueException extends \UnexpectedValueException
{
    
    protected $message = 'Unexpected Argument of type %s given';

    
/**
 * @uses $message    
 */
    public function __construct($var='', $code = 0, \Exception $previous = null)
    {
        $message = sprintf($this->message, Exception::getType($var));
        parent::__construct($message, $code, $previous);
    } 

    
/**
 * @return html
 * @uses   Exception::getDebugHtml()
 */
    public function __toString()
    {
        return Exception::getDebugHtml($this);        
    }

    
   
    
}    