 <html>
	 <head>
		<title> Products </title>
        <link rel="stylesheet" type="text/css" href="css/template.css">
        <link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400|Lato:300,400' rel='stylesheet' type='text/css'>
	 </head>
	 <body>
         <div class="container">
            <div class="header_top">
            </div>
                    
            <div class="header">
                <a href="index.php"> <img class="logo" src="assets/logo.png"></a>
                    <div class="search">
                        <input id="search_input"></input>
     
                        <button id="search_button"></button>     
                    </div>                
            </div>
            
            <div class="header_bottom">
            </div>
           
            <?php 		
							include('functions.php');
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
                            //Number of entries per page 
							$n_entries = 2;
							
                            //Print Search results
							$count =0;
							//Number of projects
							$total_projects = mysql_num_rows($result);
                            while($row = mysql_fetch_assoc($result))
                            {	
    							
                                print '<div class="search_result">
                                            <div class="search_result_image">
                                                <img  src='.$row['Image'] .'>
                                            </div>                
                             
                                            <div class="search_result_content">
                                                <div class="search_result_title">
                                                    <p id="title">' .$row['ProjectName'] .'</p>
                                                </div>
                                
                                                <div class="search_result_summary">
                                                    <p>' .$row['Summary'] .' </p>
                                                </div>
                                            </div>
                                     </div>';
									 
								$count++;
								if($count%$n_entries == 0)
									{
										printPagination($count,$n_entries, $total_projects);
										break;
									}
                            }
							
							
                            
                        ?>
                        
           <!-- <div class="search_result">
                <div class="search_result_image">
                    <img  src="assets/icons/3.png">
                </div>                
                             
                <div class="search_result_content">
                    <div class="search_result_title">
                        <p id="title"> Pneumatic System</p>
                    </div>
                                
                    <div class="search_result_summary">
                        <p>
                        The mismanagement of projects as well as huge delays in refits to extend operational lives of       		   										 					submarines further compounds the problem, say experts. Apart from one nuclear-powered submarine on              	    lease from Russia, the Navy has 13 conventional submarines but all except for one are over 20 years           					  				    old. INS Sindhuratna, on board which two officers were killed and several others injured on Wednesday,   							 				    in fact, is among the eight submarines over 25 years old. 
                        </p>        
                     </div>
                </div>
             </div>
            
            <div id="pagination">
            <img src="assets/prev_page.png">
            <img src="assets/next_page.png">
            	
            </div>  -->
            
            <div class="footer">
                <p> Contact at sourabharsh@gmail.com in case of any glitches in the page.</p>
            </div>
                   
           
         </div>
	 </body>
 </html>