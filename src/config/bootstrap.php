<?php
// Define path to project home directory

if (false === defined('BASE_PATH'))
{
	define('BASE_PATH', realpath(dirname(__FILE__) . '/../../'));
}
define('APPLICATION_ENV', 'dev');

require_once BASE_PATH . '/src/config/const.php';
require_once BASE_PATH . '/vendor/autoload.php';