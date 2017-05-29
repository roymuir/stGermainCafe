<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'st_germain_cafe',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_GB');
