<?php
// Define path to project home directory
if (false === defined('BASE_PATH'))
{
	define('BASE_PATH', realpath(dirname(__FILE__) . '/../../'));
}

require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/src/model/Coolstuff.php';