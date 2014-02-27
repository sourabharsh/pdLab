 <html>
	 <head>
		<title> Products </title>
        <link rel="stylesheet" type="text/css" href="css/template.css">
	 </head>
	 <body>
     <div class="container">
        <div class="header_top">
        </div>
                
     	<div class="header">
        	<a href="index.php"> <img class="logo" src="assets/logo.png"> </a>
		    	<div class="search">
					<input id="search_input"></input>
 
                    <button id="search_button"></button>     
                </div>                
        </div>
       <div class="header_bottom">
            </div>
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
						$sql = "SELECT * from projects";
							$result = mysql_query($sql, $dbhandle)
									  or die("Failed to select Data ". mysql_error());
							
						//Print Search results
						
						while($row = mysql_fetch_assoc($result))
						{	
							print '<div class="search_result">'. 
								'<h1> '.$row['Description'] ." </h1>".
               					"</div>";	
							}
						
					?>
                    
                    <div class="search_result">
                    
                    </div>
               
       
     </div>
	 </body>
 </html>