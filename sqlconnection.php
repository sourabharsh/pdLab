<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <!-- TemplateBeginEditable name="doctitle" -->
        <title>Fill data in the Database </title>
    </head>

    <body>
    	<?php 
						// connect to the Wampserver mysql database
						//Define credentials
						$username = "root";
						$password = "";
						$hostname = "localhost";
						
						$dbhandle = mysql_connect($hostname,$username,$password) 
									or die("Failed to connect to Mysql");
						
						// Select our database: pdlab_db
						$db_name = "pdlab_db";
						$selected_db = mysql_select_db($db_name,$dbhandle)
										or die("Failed to connect to the Database");
						// create A table 
						$sql = "Create Table projects
								(Id INT,
								 ProjectName varchar(255),
								 Description varchar(255),
								 imageName   varchar(255)
								 )";
						$result = mysql_query($sql,$dbhandle)
								  or die("Failed to create the table");
								 
						


		?>
    </body>
</html>
 