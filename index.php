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
            
            <?php 		 
            	           
				include('config.php');
				include('paginate.php');
				
				$per_page_items = 2;
				$sql = "SELECT * FROM Projects";
				$result = mysql_query($sql);
				mysql_close($mysql_conn);
				$total_results = mysql_num_rows($result);
				$total_pages = ceil($total_results/$per_page_items);
				print '<div class="header">
                			<a href="index.php"> <img class="logo" src="assets/logo_home.png"></a>
							
			                <div class="search">
            			        <input id="search_input"></input>
			                    <button id="search_button"></button>     
								
			                </div>                							
							
			           </div>';
				 print '<div class="header_top">
				 		</div>';
				//If the Page is SETCHECK
				if(isset($_GET['page']))
				{
					$show_page = $_GET['page'];				//Current page
					
					if($show_page <= $total_pages && $show_page >0)
					{
						$start = ($show_page -1)*$per_page_items;
						$end = $start + $per_page_items;
					}
					else
					{
						//error, show the first page
						$start = 0;
						$end = $start + $per_page_items;
					}
				}
				else
				{
					//The page tag is not set  so Show the first page
					$show_page =1;
					$start = 0;
					$end = $start + $per_page_items;
				}
				
				// Display Pagination
				//$page = intval($_GET['page']);
				
				//$page = 1;
				//$show_page =1;	
				$tpages = $total_pages;
				/*if($page <= 0)
				 	$page =1;
				*/
				$reload = $_SERVER['PHP_SELF']. "?tpages=". $tpages;
				
				
				//Display Data
				$reload = $_SERVER['PHP_SELF'] ."?tpages=" . $tpages;
				print '<div class="search_section">';
				for($i=$start; $i < $end; $i++){
					print '<a href="/pdlab/project.php?project='.mysql_result($result,$i,'Id')  .'" >
								<div class="search_result">
                                            <div class="search_result_image">
                                                <img  src='.mysql_result($result,$i,'Image') .'>
                                            </div>                
                             
                                            <div class="search_result_content">
                                                <div class="search_result_title">
                                                    <p id="title">' .mysql_result($result,$i,'ProjectName') .'</p>
                                                </div>
                                
                                                <div class="search_result_summary">
                                                    <p>' .mysql_result($result,$i,'Description') .' </p>
                                                </div>
                                            </div>
                                     </div>
						  </a>';
				}
				print "</div>";
				
				echo '<div id="pagination">';
				if($total_pages > 1 ){
					echo paginate($reload, $show_page, $total_pages);	
				}
				echo '</div>';

				
				
				
				
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
                <p> Contact at sourabharsh@gmail.com in case of any glitch in the page.</p>
            </div>
                  
           
         </div>
	 </body>
 </html>