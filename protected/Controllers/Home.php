<?php

namespace Controllers;

use Raice\Controller as Controller;
    
class Home
    extends Controller
{
    
    public function index ()
    {

       parent::getView( $this->getName() );
        
    }
    
}
