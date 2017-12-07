<?php

namespace Controllers;

use Raice\Controller as Controller;
    
class Welcome extends Controller
{
    
    public function __construct ()
    {
  
        parent::__construct( $this->getName() );
        
    }
    
}
