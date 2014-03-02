<?php
	$mysql_hostname = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "pdlab_db";
	
	//Connect to the mysql server
	$mysql_conn = mysql_connect($mysql_hostname,$mysql_username,$mysql_password)
					or die("Failed to connect to the Mysql");
	
	//Select our database
	mysql_select_db($mysql_database, $mysql_conn)
	or die("Failed to select the Database");
?>