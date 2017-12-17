<?php

namespace Controllers;

use Raice\Controller as Controller;
use Models\User as User;
    
class Article
    extends Controller
{
    
    
    public $article;
    
    public function __call ( $id, $arguments = false )
    {
        
        $id = (int) $id;
        
        if ( is_integer( $id ) && $id !== 0 ) {
            
            $this->article = \Models\Article::getOneById( $id );
            
        } else {
            
            $url = strtolower( $id );

            $this->article = \Models\Article::getOneByField( $url, 'url' );
            
        }
        
    }
    
}
