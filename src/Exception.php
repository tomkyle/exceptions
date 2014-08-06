<?php
namespace tomkyle;

class Exception extends \Exception
{

    
   
/**
 * @return html
 * @uses   getDebugHtml()
 */
    public function __toString()
    {
        return static::getDebugHtml($this);
    }    
    
    
    
/**
 * @param  mixed $var
 * @return string     
 */
    public static function getType($var)
    {
        return is_object($var) 
               ? get_class($var) 
               : (is_resource($var)
                  ? get_resource_type($var)
                  : gettype($var));        
    }    
    

/**
 * @return string
 */    
    public static function getCssSelector(\Exception $exception)
    {
        return str_replace('\\', ' ', get_class($exception));           
    }





    public static function getDebugHtml(\Exception $exception)
    {
        $css   = static::getCssSelector($exception);
        
        $rueck = '<div class="error ' . $css . '">' . "\n"
               . "<p><b>" . get_class($exception) . "</b>\n" 
               
               . "thrown at line " . $exception->getLine() . "\n"
               . "in <br />\n" .     $exception->getFile() . "</p>\n"
              
               . "<p><i>"   . $exception->getMessage()       . "</i></p>\n"
               . "<pre>"    . $exception->getTraceAsString() . "</pre>\n"
               . "</div>\n";
               
        return $rueck;              
    }



}
