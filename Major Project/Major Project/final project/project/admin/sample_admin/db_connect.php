<?php 

	/**
	 * 
	 */
	class DB_CONNECT
	{
		
		function __construct()
		{
			$this->connect();
		}

		function __destruct()
		{
			$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
			$this -> close($con);
		}

		function connect()
		{
			require_once __DIR__.'/db_config.php';

			$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

			return $con;
		}

		function close($con){

			mysqli_close($con);
		}
	}


?>