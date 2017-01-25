<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=localhost;dbname=dodmedia_bd_coeri',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	
	/******* TESTING ********/
	/*
	'connectionString' => 'mysql:host=localhost;dbname=dodmedia_bd_coeri',
	'emulatePrepare' => true,
	'username' => 'dodmedia_juanveg',
	'password' => '_J3L0#)T}S{7',
	'charset' => 'utf8',*/

	/******* PRODUCTION ********/
	/*
	'connectionString' => 'mysql:host=localhost;dbname=coericom_bd',
	'emulatePrepare' => true,
	'username' => 'coericom_coeri',
	'password' => 'C#ewD1b^P0}%',
	'charset' => 'utf8',*/
);