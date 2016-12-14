<?php

//codeship
if(!empty(getenv('MYSQL_USER'))) {
	define('DB_HOST', 'localhost');
	define('DB_USER',  getenv('MYSQL_USER'));
	define('DB_PWD', getenv('MYSQL_PASSWORD'));
	define('DB_NAME', 'test');
}
//circle
elseif(!empty(getenv('CIRCLE_USERNAME'))){
	define('DB_HOST', 'localhost');
	define('DB_USER', 'ubuntu');
	define('DB_PWD',  '');
	define('DB_NAME', 'test');
}
//bitbucket piplines
elseif(!empty(getenv('BITBUCKET_COMMIT'))){
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PWD',  'root');
	define('DB_NAME', 'test');
}
//travis
elseif(!empty(getenv('TRAVIS'))){
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PWD', '');
	define('DB_NAME', 'test');
}
//local
else{
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PWD', '');
	define('DB_NAME', 'test');
}

