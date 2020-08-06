<?php

require __DIR__ . '/../bootstrap.php';
 
if (redirectHasData()) {
	$red = redirectGetData();
	resolve($red['base'], $red['data'], $red['files']);
}
else
	resolve();
