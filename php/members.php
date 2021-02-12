<?php

	function get_members()
	{
		//Open file of members
		$csv = array_map('str_getcsv', file(dirname(__DIR__).'/content/members.csv'));
		$len = sizeof($csv);
		
		echo "\n";
		for($i = 1; $i < $len; $i++)	//loop over members
		{
			echo "\t\t\t\t<div class=\"col-md-4 col-sm-6 col-xs-12\">\n";
			echo "\t\t\t\t\t<div class=\"welcome-section text-center\">\n";
			//display image
			echo "\t\t\t\t\t\t<img src=\"";
			echo $csv[$i][8];
			echo "\", class=\"ism_profile img-responsive\" alt=\"..\"><br/>\n";	//img.profile
			echo "\t\t\t\t\t\t<h4>";
			//display name
			for($j = 0; $j < 7; $j++)
			{
				if(!empty($csv[$i][$j]))
				{
					if($j == 2)
					{
						echo "\"";
					}
					echo $csv[$i][$j];
					if($j == 2)
					{
						echo "\"";
					}
					if($j != 5)
					{
						echo " ";
					}
				}
			}
			echo "</h4>\n";
			echo "\t\t\t\t\t\t<div class=\"border\"></div>\n";
			//display email link
			//echo "\t\t\t\t\t\t<p> <a href=\"mailto:";
			//echo $csv[$i][6];
			//echo "\">Email</a>";
			//If a profile page is given, display link to it
			if(!empty($csv[$i][7]))
			{
				//echo " / \n";
				echo "\t\t\t\t\t\t<a href=\"";
				echo $csv[$i][7];
				echo "\" target=\"_blank\">Personal Webpage</a>\n";
			}
			else	//otherwise do nothing
			{
				echo "</p>\n";
			}	
			echo "\t\t\t\t\t</div>\n";
			echo "\t\t\t\t</div>\n";
			if($i==6)
			{
				echo "\t\t\t\t<div class=\"w-100 d-none d-md-block\"></div>\n";
			}
		}
	}
	
?>
