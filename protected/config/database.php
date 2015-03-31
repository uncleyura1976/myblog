<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/myblog.db',
	
	// uncomment the following lines to use a MySQL database
	'connectionString' => 'mysql:host=localhost;dbname=myblog',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	'tablePrefix'=>'tbl_',
);