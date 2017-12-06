<?php

namespace Models;

use Raice\Model as Model;
    
class Article 
  extends Model
{

  protected const TABLE = 'articles';
  
  public $title;
  public $content;

}
