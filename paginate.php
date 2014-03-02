<link rel="stylesheet" type="text/css" href="css/template.css">
<?php
	//Script for paginating items
	function paginate($reload, $page, $tpages){
		$adjecents = 2;
		$prevlabel = "&lsaquo; Prev";
		$nextlabel = "Next &rsaquo;";
		$out = "";
		
		$out .='<ul>';
		//Previous
		if($page ==1 ){
			$out .= "<span>". $prevlabel."</span>\n";
		}
		else if($page ==2){
			$out .= "<li><a href=\"".$reload."\">".$prevlabel."</a>\n</li>";
		}
		else{
		 	$out .= "<li><a href=\"".$reload."&amp;page=".($page -1)."\">".
					$prevlabel."</a>\n</li>";
		}
			
		$pmin = ($page>$adjecents)?($page-$adjecents): 1;
		$pmax = ($page < $tpages -$adjecents)?($page + $adjecents):$tpages;
		
		for($i = $pmin; $i <=$pmax; $i++){
			if($i == $page){
				$out .= "<li class =\"active_page\"><a href=''>". $i."</a></li>\n";
			}
			else if($i ==1){
				$out  .= "<li><a href=\"".$reload."\">".$i."</a>\n</li>";
			}
			else{
				$out .= "<li><a href=\"" .$reload ."&amp;page=".$i ."\">" .$i ."</a>\n</li>";
			}


		}
		/*
		if($page < $tpages - $adjecents){
			$out .= "<a href=\"" .$reload ."&amp;page=" .$tpages ."\">" .$tpages ."</a>\n";
			
		} 
		*/
		
		//for Next Label
		if($page <$tpages){
			$out.= "<li><a href=\"".$reload."&amp;page=".($page + 1)."\">".$nextlabel."</a>\n</li>";
		}
		else{
			$out.= "<span>".$nextlabel."</span>\n";	
		}
		$out .= "</ul>";
		$out .= "";
		return $out;
		
		
		
		
		
	}
		
	
	


?>