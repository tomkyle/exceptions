<?php
/**
 * @author Carsten Witt
 */
namespace tomkyle\Exceptions;

use \tomkyle\Exception;


class RuntimeException extends \RuntimeException
{


    public function __construct($message = '', $code = 0, $previous = null)
    {
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
