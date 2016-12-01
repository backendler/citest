<?php
$service_name = 'CI TEST';

error_reporting( E_ALL );

// Define path to project home directory
define('BASE_PATH', realpath(__DIR__. '/../../'));
define('APPLICATION_PATH', BASE_PATH . '/src/model');
define('APPLICATION_ENV', 'testing');
define('TESTS_PATH', BASE_PATH . '/test/');

// Set include paths
set_include_path(implode(PATH_SEPARATOR, array(
	realpath(TESTS_PATH . '/model'),
	get_include_path()
)));

require_once BASE_PATH . '/vendor/autoload.php';
