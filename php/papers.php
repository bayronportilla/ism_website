<?php

	//function to replaec accented characters with accentless ones
	function normalizeChars($s) {
		$replace = array(
			'ъ'=>'-', 'Ь'=>'-', 'Ъ'=>'-', 'ь'=>'-',
			'Ă'=>'A', 'Ą'=>'A', 'À'=>'A', 'Ã'=>'A', 'Á'=>'A', 'Æ'=>'A', 'Â'=>'A', 'Å'=>'A', 'Ä'=>'A',
			'Þ'=>'B',
			'Ć'=>'C', 'ץ'=>'C', 'Ç'=>'C',
			'È'=>'E', 'Ę'=>'E', 'É'=>'E', 'Ë'=>'E', 'Ê'=>'E',
			'Ğ'=>'G',
			'İ'=>'I', 'Ï'=>'I', 'Î'=>'I', 'Í'=>'I', 'Ì'=>'I',
			'Ł'=>'L',
			'Ñ'=>'N', 'Ń'=>'N',
			'Ø'=>'O', 'Ó'=>'O', 'Ò'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'Oe',
			'Ş'=>'S', 'Ś'=>'S', 'Ș'=>'S', 'Š'=>'S',
			'Ț'=>'T',
			'Ù'=>'U', 'Û'=>'U', 'Ú'=>'U', 'Ü'=>'U',
			'Ý'=>'Y',
			'Ź'=>'Z', 'Ž'=>'Z', 'Ż'=>'Z',
			'â'=>'a', 'ǎ'=>'a', 'ą'=>'a', 'á'=>'a', 'ă'=>'a', 'ã'=>'a', 'Ǎ'=>'a', 'а'=>'a', 'А'=>'a', 'å'=>'a', 'à'=>'a', 'א'=>'a', 'Ǻ'=>'a', 'Ā'=>'a', 'ǻ'=>'a', 'ā'=>'a', 'ä'=>'a', 'æ'=>'ae', 'Ǽ'=>'ae', 'ǽ'=>'ae',
			'б'=>'b', 'ב'=>'b', 'Б'=>'b', 'þ'=>'b',
			'ĉ'=>'c', 'Ĉ'=>'c', 'Ċ'=>'c', 'ć'=>'c', 'ç'=>'c', 'ц'=>'c', 'צ'=>'c', 'ċ'=>'c', 'Ц'=>'c', 'Č'=>'c', 'č'=>'c', 'Ч'=>'ch', 'ч'=>'ch',
			'ד'=>'d', 'ď'=>'d', 'Đ'=>'d', 'Ď'=>'d', 'đ'=>'d', 'д'=>'d', 'Д'=>'D', 'ð'=>'d',
			'є'=>'e', 'ע'=>'e', 'е'=>'e', 'Е'=>'e', 'Ə'=>'e', 'ę'=>'e', 'ĕ'=>'e', 'ē'=>'e', 'Ē'=>'e', 'Ė'=>'e', 'ė'=>'e', 'ě'=>'e', 'Ě'=>'e', 'Є'=>'e', 'Ĕ'=>'e', 'ê'=>'e', 'ə'=>'e', 'è'=>'e', 'ë'=>'e', 'é'=>'e',
			'ф'=>'f', 'ƒ'=>'f', 'Ф'=>'f',
			'ġ'=>'g', 'Ģ'=>'g', 'Ġ'=>'g', 'Ĝ'=>'g', 'Г'=>'g', 'г'=>'g', 'ĝ'=>'g', 'ğ'=>'g', 'ג'=>'g', 'Ґ'=>'g', 'ґ'=>'g', 'ģ'=>'g',
			'ח'=>'h', 'ħ'=>'h', 'Х'=>'h', 'Ħ'=>'h', 'Ĥ'=>'h', 'ĥ'=>'h', 'х'=>'h', 'ה'=>'h',
			'î'=>'i', 'ï'=>'i', 'í'=>'i', 'ì'=>'i', 'į'=>'i', 'ĭ'=>'i', 'ı'=>'i', 'Ĭ'=>'i', 'И'=>'i', 'ĩ'=>'i', 'ǐ'=>'i', 'Ĩ'=>'i', 'Ǐ'=>'i', 'и'=>'i', 'Į'=>'i', 'י'=>'i', 'Ї'=>'i', 'Ī'=>'i', 'І'=>'i', 'ї'=>'i', 'і'=>'i', 'ī'=>'i', 'ĳ'=>'ij', 'Ĳ'=>'ij',
			'й'=>'j', 'Й'=>'j', 'Ĵ'=>'j', 'ĵ'=>'j', 'я'=>'ja', 'Я'=>'ja', 'Э'=>'je', 'э'=>'je', 'ё'=>'jo', 'Ё'=>'jo', 'ю'=>'ju', 'Ю'=>'ju',
			'ĸ'=>'k', 'כ'=>'k', 'Ķ'=>'k', 'К'=>'k', 'к'=>'k', 'ķ'=>'k', 'ך'=>'k',
			'Ŀ'=>'l', 'ŀ'=>'l', 'Л'=>'l', 'ł'=>'l', 'ļ'=>'l', 'ĺ'=>'l', 'Ĺ'=>'l', 'Ļ'=>'l', 'л'=>'l', 'Ľ'=>'l', 'ľ'=>'l', 'ל'=>'l',
			'מ'=>'m', 'М'=>'m', 'ם'=>'m', 'м'=>'m',
			'ñ'=>'n', 'н'=>'n', 'Ņ'=>'n', 'ן'=>'n', 'ŋ'=>'n', 'נ'=>'n', 'Н'=>'n', 'ń'=>'n', 'Ŋ'=>'n', 'ņ'=>'n', 'ŉ'=>'n', 'Ň'=>'n', 'ň'=>'n',
			'о'=>'o', 'О'=>'o', 'ő'=>'o', 'õ'=>'o', 'ô'=>'o', 'Ő'=>'o', 'ŏ'=>'o', 'Ŏ'=>'o', 'Ō'=>'o', 'ō'=>'o', 'ø'=>'o', 'ǿ'=>'o', 'ǒ'=>'o', 'ò'=>'o', 'Ǿ'=>'o', 'Ǒ'=>'o', 'ơ'=>'o', 'ó'=>'o', 'Ơ'=>'o', 'œ'=>'oe', 'Œ'=>'oe', 'ö'=>'oe',
			'פ'=>'p', 'ף'=>'p', 'п'=>'p', 'П'=>'p',
			'ק'=>'q',
			'ŕ'=>'r', 'ř'=>'r', 'Ř'=>'r', 'ŗ'=>'r', 'Ŗ'=>'r', 'ר'=>'r', 'Ŕ'=>'r', 'Р'=>'r', 'р'=>'r',
			'ș'=>'s', 'с'=>'s', 'Ŝ'=>'s', 'š'=>'s', 'ś'=>'s', 'ס'=>'s', 'ş'=>'s', 'С'=>'s', 'ŝ'=>'s', 'Щ'=>'sch', 'щ'=>'sch', 'ш'=>'sh', 'Ш'=>'sh', 'ß'=>'ss',
			'т'=>'t', 'ט'=>'t', 'ŧ'=>'t', 'ת'=>'t', 'ť'=>'t', 'ţ'=>'t', 'Ţ'=>'t', 'Т'=>'t', 'ț'=>'t', 'Ŧ'=>'t', 'Ť'=>'t', '™'=>'tm',
			'ū'=>'u', 'у'=>'u', 'Ũ'=>'u', 'ũ'=>'u', 'Ư'=>'u', 'ư'=>'u', 'Ū'=>'u', 'Ǔ'=>'u', 'ų'=>'u', 'Ų'=>'u', 'ŭ'=>'u', 'Ŭ'=>'u', 'Ů'=>'u', 'ů'=>'u', 'ű'=>'u', 'Ű'=>'u', 'Ǖ'=>'u', 'ǔ'=>'u', 'Ǜ'=>'u', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'У'=>'u', 'ǚ'=>'u', 'ǜ'=>'u', 'Ǚ'=>'u', 'Ǘ'=>'u', 'ǖ'=>'u', 'ǘ'=>'u', 'ü'=>'u',
			'в'=>'v', 'ו'=>'v', 'В'=>'v',
			'ש'=>'w', 'ŵ'=>'w', 'Ŵ'=>'w',
			'ы'=>'y', 'ŷ'=>'y', 'ý'=>'y', 'ÿ'=>'y', 'Ÿ'=>'y', 'Ŷ'=>'y',
			'Ы'=>'y', 'ž'=>'z', 'З'=>'z', 'з'=>'z', 'ź'=>'z', 'ז'=>'z', 'ż'=>'z', 'ſ'=>'z', 'Ж'=>'zh', 'ж'=>'zh'
		);
		return strtr($s, $replace);
	}
	
	function number_to_month($number)
	{
		if($number == "01")
		{
			return "Jan";
		} elseif($number == "02")
		{
			return "Feb";
		} elseif($number == "03")
		{
			return "Mar";
		} elseif($number == "04")
		{
			return "Apr";
		} elseif($number == "05")
		{
			return "May";
		} elseif($number == "06")
		{
			return "Jun";
		} elseif($number == "07")
		{
			return "Jul";
		} elseif($number == "08")
		{
			return "Aug";
		} elseif($number == "09")
		{
			return "Sep";
		} elseif($number == "10")
		{
			return "Oct";
		} elseif($number == "11")
		{
			return "Nov";
		} elseif($number == "12")
		{
			return "Dec";
		} else
		{
			return $number;
		}
	}

	//get url for arXiv quiery
	function get_quiery($num)
	{
		$csv = array_map('str_getcsv', file(dirname(__DIR__).'/content/members.csv'));
		$len = sizeof($csv);
		
		$quiery = "http://export.arxiv.org/api/query?search_query=%28au:";
		/*For each member, generate their part of the quiery
		  It will include (where avaliable):
			first_initial+initials+last_name
			first_name+initials+lastname
			first_initial+last_name
			first_name+last_name
			nickname+last_name		
			*/
		for($i = 1; $i < $len; $i++)
		{
			//Remove accents and stuff
			$csv[$i][1] = normalizeChars($csv[$i][1]);
			$csv[$i][2] = normalizeChars($csv[$i][2]);
			$csv[$i][3] = normalizeChars($csv[$i][3]);
			$csv[$i][4] = normalizeChars($csv[$i][4]);
			//with middle initials, if they exist
			if(!empty($csv[$i][3]))
			{
				//first_initial+initials+last_name
				$quiery .= "%22";
				$quiery .= $csv[$i][1][0];
				$quiery .= ".+";
				$quiery .= str_replace(" ", "+", $csv[$i][3]);	//replace spaces with +
				$quiery .= "+";
				$quiery .= str_replace(" ", "+", $csv[$i][4]);
				$quiery .= "%22";
				$quiery .= "+OR+";
				//first_name+initials+last_name
				$quiery .= "%22";
				$quiery .= $csv[$i][1];
				$quiery .= "+";
				$quiery .= str_replace(" ", "+", $csv[$i][3]);
				$quiery .= "+";
				$quiery .= str_replace(" ", "+", $csv[$i][4]);
				$quiery .= "%22";
				$quiery .= "+OR+";
			}
			
			//weithout middle initials
			//first_initial+last_name
			$quiery .= "%22";
			$quiery .= $csv[$i][1][0];
			$quiery .= ".+";
			$quiery .= str_replace(" ", "+", $csv[$i][4]);
			$quiery .= "%22";
			$quiery .= "+OR+";
			//first_name+last_name
			$quiery .= "%22";
			$quiery .= $csv[$i][1];
			$quiery .= "+";
			$quiery .= str_replace(" ", "+", $csv[$i][4]);
			$quiery .= "%22";
			
			//if a nickname is given, use it instead of first name
			//but without middle initials
			if(!empty($csv[$i][2]))
			{
				$quiery .= "+OR+";
				$quiery .= "%22";
				$quiery .= $csv[$i][2];
				$quiery .= "+";
				$quiery .= str_replace(" ", "+", $csv[$i][4]);
				$quiery .= "%22";
			}
			if($i != $len-1)
			{
				$quiery .= "+OR+";
			}
		}
		$quiery .= "%29+AND+%28";
		//only search in astr-ph and children
		$quiery .= "cat:astro-ph+OR+astro-ph.CO+OR+astro-ph.EP+OR+astro-ph.GA+OR+";
		$quiery .= "astro-ph.HE+OR+astro-ph.IM+OR+astro-ph.SR%29";
		//select the five (5) latest papers
		$quiery .= "&sortBy=lastUpdatedDate&sortOrder=descending&start=0&max_results=";
		$quiery .= (string)$num;
		
		return $quiery;
	}
	
	function get_papers($enable, $num)
	{
		if(!$enable) //Use when messing with other things
		{
			echo "Latest Preprints Disabled";
			return;
		}
		
		//Get data from arXiv
		$url = get_quiery($num);
		$response = file_get_contents($url);
		//convert response into xml so it's easier to deal with
		$arxiv = new SimpleXMLElement($response);
		//get number of entries (things can go wrong so worth checking)
		$len = sizeof($arxiv->entry);
		
		echo "\n";
		
		$tab = "\t\t\t\t\t";
		
		for($i = 0; $i < $len; $i++)
		{
			echo $tab."<div class=\"col-md-12\">\n";
			echo $tab."\t<div class=\"latest-post\">\n";
			echo $tab."\t\t<img src=\"images/about-0";
			echo $i+1;
			echo ".jpg\" class=\"img-responsive\" alt=\"\">\n";
			
			//title
			echo $tab."\t\t<h4><a href=";
            echo $arxiv->entry[$i]->id;
            echo " target=\"_blank\">";
			echo $arxiv->entry[$i]->title;
			echo "</a></h4>\n";
			
			//date
			echo $tab."\t\t<div class=\"post-details\">\n";
			echo $tab."\t\t\t<span class=\"date\"><strong>";
			$date = $arxiv->entry[$i]->updated;
			$date = (string)$date;
			//echo $date;
			$year = substr($date, 0, 4);
			$month = substr($date, 5, 2);
			$day = substr($date, 8, 2);
			echo $day;
			echo "</strong> <br>";
			echo number_to_month($month);
			echo ", ";
			echo $year;
			echo "</span>\n";
			echo $tab."\t\t</div>\n";
			
			//summary
			echo $tab."\t\t<p>";
			$summary = $arxiv->entry[$i]->summary;
			echo substr($summary, 0, 297);
			echo "...</p>\n";
			
			//link
			echo $tab."\t\t<a href=";
			echo $arxiv->entry[$i]->id;
			echo " target=\"_blank\" class=\"btn btn-primary\">Read More</a>\n";
			
			echo $tab."\t</div>\n";
			echo $tab."</div>\n";
		}
	}
	
?>
