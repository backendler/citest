<?php

//codeship
if(!empty(getenv('DB_NAME'))) {
	define('DB_HOST', 'localhost');
	define('DB_USER',  getenv('MYSQL_USER'));
	define('DB_PWD', getenv('MYSQL_PASSWORD'));
	define('DB_NAME', getenv('DB_NAME'));
}
else{
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PWD', 'master');
	define('DB_NAME', 'test');
}

