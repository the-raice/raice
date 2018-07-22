<?php

namespace Raice;

function autoload ($class) {
        
    if ( file_exists( ROOT_PATH . 'protected/' . $class . '.php' ) ) {
      
        require_once ROOT_PATH . 'protected/' . $class . '.php';
        return true;
     
    }
        
}
    
spl_autoload_register('Raice\autoload');
