<?php
	session_start();
	$config['host'] = "localhost" ;
	$config['user'] = "root" ;
	$config['password'] = "redhat@11111p" ;
	$config['database'] = "survey" ;
	$db_handle = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
?>