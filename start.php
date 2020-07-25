<?php

require 'vendor/autoload.php';
require 'config.php';

use Models\General\Database;
 
//Boot Database Connection
new Database();

?>