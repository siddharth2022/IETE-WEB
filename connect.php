<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'IETE';

	$database_handler = new mysqli($host,$username,$password,$database);

	if($database_handler->connect_error) {
	  die("Connection Error");
    }
// 		Sample Query:- 

// 		if(!$resultset = $database_handler->query("SELECT * FROM user_detail where uid =".$uid." ;"))
// die("Query error");

// $row = $resultset->fetch_assoc(); or 
//  while($row = $resultset->fetch_assoc())
// $address=$row['block'].",".$row['area'].",".$row['city'].",".$row['state'].".";

?>
