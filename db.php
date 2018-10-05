<?php
	include ('cofine.php');

	class db{
		 public static $connection = NULL;
		 public fuction_construct() {
		 	if(!self::$connection){
		 		self::$connection=mysql_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		 	}
		 }
		 public function query($spl){
		 	$data=mysqli_query(self::$connection,$spl);

		 	return $data;
		 }
		 public function select($sql){
		 	$data= $this -> query($sql);
		 	$rows =[];

		 	while ($row = mysql_fetch_assoc($data)) {
		 		$rows []=$row;
		 	}
		 	return $rows;
		 }
	}


?>