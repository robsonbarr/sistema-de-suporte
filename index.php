<?php
	define('HOST','localhost');
	define('DATABASE','sistem_suporte');
	define('USER','root');
	define('PASSWORD','');

	$autoload = function($class){
		include($class.'.php');
	};

	spl_autoload_register($autoload);



$homeController = new \controllers\homeController();


	Router::get('/',function() use ($homeController){
	     $homeController->index();
	});



	
		
	


?>





