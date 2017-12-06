<?php

namespace Models;

use Raice\Model as Model;
    
class Article 
  extends Model
{

  protected TABLE = 'articles';
  
  public $title;
  public $content;

}
