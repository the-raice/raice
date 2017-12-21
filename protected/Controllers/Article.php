<?php

namespace Controllers;

use Raice\Controller as Controller;
use Models\User as User;
    
class Article
    extends Controller
{
    
    
    public $article;
    
    public function __call ( $url, $arguments = false )
    {
        
        session_start();
        
        $url = strtolower( $url);

        $this->article = \Models\Article::getOneByField( $url, 'url' )[0];
        
        parent::getView( $this->getName(), $this->article );

    }
    
    public function edit ()
    {
     
        if ( User::isEditor( $_SESSION['authorized'] ) ) {

            $this->article = \Models\Article::getOneByField( $url, 'url' )[0];
               
            parent::getView( $this->getName(), $this->article );
            
        }
        
    }
    
    public function delete()
    {
     
        if ( User::isEditor( $_SESSION['authorized'] ) ) {

            \Models\Article::deleteOneByField( $url, 'url' );
            
        }
        
    }
    
}
