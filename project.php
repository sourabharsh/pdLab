<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
    <link href="css/template.css" rel="stylesheet" type="text/css" />

    <link href="css/project_page.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400|Lato:300,400' rel='stylesheet' type='text/css'>
    

</head>


</head>

<body>
	<?php
    	include("config.php");
                    if( isset($_GET['project'])){		
                        $id= intval($_GET['project']);

                    }
					$sql = "SELECT * FROM Projects where Id = $id";
					$result = mysql_query($sql, $mysql_conn)
							  or die("Failed to select the id");
					$row = mysql_fetch_array($result);
	?>
	
	<div class="container">
    		<div class="header_top">
            </div>
            
            <div class="header">
                <a href="index.php"> <img class="logo" src="assets/logo_project.png"></a>                
                        <?php
							print '<h1 class="project_name">'.$row['ProjectName'].'</h1>';
                        ?>
                
                <!--<div class="menu">
                	<nav>  
                        	<ul>  
                                <li>Home
                                    <ul>
                                        <li><a href="#">Problem Statement</a></li>
                                        <li><a href="#">Description</a></li>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Problem Statement</a></li>
                                        <li><a href="#">Problem Statement</a></li>
                                    </ul>
                                </li>
                              </ul>
                        </nav>
                </div> -->

                <select class="project_menu">
                	<option>Problem Statement</option>
                    <option>Solution</option>
                    <option>Uniqueness</option>
                    <option>Tech Details</option>
                    <option>Status</option>
                    <option>Acknowledgement</option>
                    <option>Team</option>
                    <option>Contact</option>
                </select>
                
            </div>
            
			<div class="header_bottom">
            </div>
            <div class="project_section">
				<?php
					
					print '<title>
							' .$row['ProjectName']
							.'</title>';	
					
					print '<div class="problem_statement">
           		     			<h1>Problem Statement</h1>
								<p> &nbsp; &nbsp;' .$row['Description'] .'</p>
		                   </div>';
					print '<div class="problem_statement">
                				<h1>Solution</h1>
			                    <p> &nbsp; &nbsp;' .$row['Description'] .'</p>              
            			    </div>';
							
					print '<div class="problem_statement">
                				<h1>Uniqueness</h1>
			                    <p> &nbsp; &nbsp;' .$row['Description'] .'</p>              
            			    </div>';

					print '<div class="problem_statement">
                				<h1>Technical Details</h1>
			                    <p> &nbsp; &nbsp;' .$row['Description'] .'</p>              
            			    </div>';
					
					print '<div class="problem_statement">
                				<h1>Status</h1>
			                    <p> &nbsp; &nbsp;' .$row['Description'] .'</p>              
            			    </div>';
							
					print '<div class="problem_statement">
                				<h1>Acknowledgement</h1>
			                    <p> &nbsp; &nbsp;' .$row['Description'] .'</p>              
            			    </div>';
					
												
					print '<div class="problem_statement">
                				<h1>The Team</h1>
			                    <p> &nbsp; &nbsp;' .$row['Description'] .'</p>              
            			    </div>';
							
					print '<div class="problem_statement">
                				<h1>Contact Details</h1>
			                    <p> &nbsp; &nbsp;' .$row['Description'] .'</p>              
            			    </div>';                    
                ?>
                
            
            	
            
            </div>


    </div>
</body>
</html>