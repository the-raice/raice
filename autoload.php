<?php

function __autoload ( $class ) {
    
    if ( file_exists( $class . '.php' ) ) {
          
          require_once $class . '.php';
         
    } else {
          
          throw new \Exception('The ' . $class . ' class doesn\'t exist!');
          
    }
      
} 
