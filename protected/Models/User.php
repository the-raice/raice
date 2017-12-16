<?php

namespace Models;

use Raice\Model as Model;
        
class User 
    extends Model
{

    const TABLE = 'users';
    
    public $id;
    public $first_name;
    public $last_name;
    public $image;
    public $url;

}
