<?php 

// importing start database
require_once __DIR__.'/start.php';

// using view model
use Models\General\View;
// declaring view
$view = new View();
// if you want to give view any content
// $view = new View( [ 'var' => [ 'atribute1' => 'value1', 'atribute2' => 'value2' ] ] );
// $view = new View( [ 'var1' => [ 'atribute1' => 'value1', 'atribute2' => 'value2' ] ] ,  [ 'var2' => [ 'atribute1' => 'value1', 'atribute2' => 'value2' ] ] );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta config -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- link css -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/ricostrap.css">
    <link rel="stylesheet" href="public/css/main.css">
    <!-- import title -->
    <title><?php echo $view->get('title'); ?></title>
</head>
<body>
    

    <?php

    	// return view
		require_once __DIR__.'/'.$view->get('path');

    ?>

    <script type="text/javascript" src="public/js/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</body>
</html>

