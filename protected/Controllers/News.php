<?php

namespace Controllers;

use Raice\Controller as Controller;
use Models\Article as Article;
use Models\User as User;
    
class News
    extends Controller
{
    
    
    public $article;
    
    public function index ()
    {
        
        session_start();
        
        $this->article = Article::getAll();
        
        parent::getView( $this->getName(), $this->article );
        
    }
    
}
