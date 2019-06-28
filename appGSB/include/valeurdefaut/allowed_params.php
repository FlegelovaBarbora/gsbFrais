<?php

function allowed_get_params($allowed_params=[]) {
	$allowed_array = [];
	foreach($allowed_params as $param) {
		if(isset($_GET[$param])) {
			$allowed_array[$param] = $_GET[$param];
		} else {
			$allowed_array[$param] = NULL;
		}
	}
	return $allowed_array;
}

$get_params = allowed_get_params(['username', 'password']);

var_dump($get_params);
//on peut alors traiter les variables car elles ont toutes des valeurs par defaut



?>
