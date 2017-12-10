<?php

namespace Models;

use Raice\Model as Model;
    
class Article 
  extends Model
{

  const TABLE = 'articles';
  
  public $title;
  public $content;

}
