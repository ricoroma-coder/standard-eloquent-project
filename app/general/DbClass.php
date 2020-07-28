<?php

namespace App\General;

use App\General\ModelObject;
use App\General\Database;
 
class DbClass extends ModelObject {

    protected $connection;
    
    public function __construct() {
        $obj = parent::__construct();
        $this->connection = new Database(); 
    }
 
}