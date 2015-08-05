<?php

namespace Panada\Utilities;

class Factory
{
    protected static $instance = [];
    
    public static function getInstance()
    {
        $child = get_called_class();
        
        if (! isset(self::$instance[$child])) {
            self::$instance[$child] = new static;
        }
        
        return self::$instance[$child];
    }
}
