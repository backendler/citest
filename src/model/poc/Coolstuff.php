<?php
namespace poc;

use Zend_Db;

/**
 * Class Coolstuff
 * @package poc
 */
class Coolstuff
{

	/**
	 * yeah yeah
	 *
	 * @param $val1
	 * @param int $val2
	 * @return string
	 */
	public function yeah($val1,$val2 = null){

		$db_str = $this->dbYeah($val2);
		$str = "<h1>$val1 $db_str</h1><br>";

		return $str;

    }

	/**
	 * @param $val1
	 * @return mixed
	 */
    public function dbYeah($val1){
		$result = "";

		if(is_int($val1))
		{
			$db = $this->getDb();
			$sql = "SELECT text FROM yeah WHERE id = " . intval($val1);

			$result = $db->fetchOne($sql);
		}
		return $result;
	}

	/**
	 * @return Zend_Db_Adapter_Pdo_Mysql
	 */
	protected function getDb(){
		$db = Zend_Db::factory('Pdo_Mysql', array(
			'host'		=> DB_HOST,
			'username' 	=> DB_USER,
			'password'	=> DB_PWD,
			'dbname'	=> DB_NAME
		));

		return $db;
	}
}