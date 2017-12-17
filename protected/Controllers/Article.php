<?php

namespace Controllers;

use Raice\Controller as Controller;
use Models\Article as Article;
use Models\User as User;
    
class Article
    extends Controller
{
    
    
    public $article;
    
    public function __call ( $id, $arguments = false )
    {
        
        $id = (int) $id;
        
        if ( is_integer( $id ) && $id !== 0 ) {
            
            $this->article = Article::getOneById( $id );
            
        } else {
            
            $url = strtolower( $id );

            $this->article = Article::getOneByField( $url, 'url' );
            
        }
        
    }
    
}
