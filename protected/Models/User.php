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
    
    public function isEditor( $id, $author_id )
    {
        
        session_start();
        
        $user = self::getOneById( $_SESSION['authorized'] );
        
        if ( ( $author_id == $_SESSION['authorized'] ) || ( $user['role'] == 'admin' ) ) {
         
            return true;
            
        } else {
            
            return false;
            
        }
        
    }

}
