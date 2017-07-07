<?php

namespace Raice;

function autoload ($class) {
        
    if ( file_exists( ROOT_PATH . 'protected/' . $class . '.php' ) ) {
      
        require_once ROOT_PATH . 'protected/' . $class . '.php';
        return true;
     
    } else {
        
        throw new \Exception('The ' . $class . ' class doesn\'t exist!');
        return false;
          
    }
        
}
    
spl_autoload_register('Raice\autoload');
