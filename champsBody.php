<div id="champsBody" class="navBody"><table><tr><td width="50px"></td><td><font class="text"><?php
	
	
	// create curl resource 
	$ch = curl_init(); 

	// set url 
	curl_setopt($ch, CURLOPT_URL, "https://euw.api.pvp.net/api/lol/euw/v2.2/match/2149447142?api_key=c0f3e974-d3d3-40ea-9b97-287ee97764ce"); 

	//return the transfer as a string 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	// $output contains the output string 
	$output = curl_exec($ch); 
	// close curl resource to free up system resources 
	curl_close($ch);
	
	$testString = 	substr($output, strpos($output, '"region"'), strpos(substr($output, strpos($output, '"region"')), ',') + 1) .
					substr($output, strpos($output, '"matchMode"'), strpos(substr($output, strpos($output, '"matchMode"')), ',') + 1) .
					substr($output, strpos($output, '"queueType"'), strpos(substr($output, strpos($output, '"queueType"')), ',') + 1) .
					substr($output, strpos($output, '"mapId"'), strpos(substr($output, strpos($output, '"mapId"')), ',') + 1);
	
	$midlaneComplete1 = 	substr($output, strrpos(substr($output, 0, strpos($output, '"lane":"MIDDLE"')), '"teamId"'), strpos($output, '"lane":"MIDDLE"') - strrpos(substr($output, 0, strpos($output, '"lane":"MIDDLE"')), '"teamId"') + strpos(substr($output, strpos($output, '"lane":"MIDDLE"')), '"teamId":'));
	$midlaneComplete2 = 	substr($output, strrpos(substr($output, 0, strrpos($output, '"lane":"MIDDLE"')), '"teamId"'), strrpos($output, '"lane":"MIDDLE"') - strrpos(substr($output, 0, strrpos($output, '"lane":"MIDDLE"')), '"teamId"') + strpos(substr($output, strrpos($output, '"lane":"MIDDLE"')), '"teamId":'));
	
	$midlane1 =		substr($midlaneComplete1, strpos($midlaneComplete1, '"championId"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"championId"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"highestAchievedSeasonTier"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"highestAchievedSeasonTier"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"role"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"role"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"lane"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"lane"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"winner"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"winner"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"item0"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"item0"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"item1"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"item1"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"item2"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"item2"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"item3"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"item3"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"item4"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"item4"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"item5"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"item5"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"item6"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"item6"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"kills"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"kills"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"deaths"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"deaths"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"assists"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"assists"')), ',') + 1) .
					substr($midlaneComplete1, strpos($midlaneComplete1, '"largestMultiKill"'), strpos(substr($midlaneComplete1, strpos($midlaneComplete1, '"largestMultiKill"')), ',') + 1);
					
	$midlane2 =		substr($midlaneComplete2, strpos($midlaneComplete2, '"championId"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"championId"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"highestAchievedSeasonTier"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"highestAchievedSeasonTier"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"role"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"role"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"lane"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"lane"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"winner"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"winner"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"item0"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"item0"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"item1"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"item1"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"item2"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"item2"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"item3"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"item3"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"item4"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"item4"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"item5"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"item5"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"item6"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"item6"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"kills"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"kills"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"deaths"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"deaths"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"assists"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"assists"')), ',') + 1) .
					substr($midlaneComplete2, strpos($midlaneComplete2, '"largestMultiKill"'), strpos(substr($midlaneComplete2, strpos($midlaneComplete2, '"largestMultiKill"')), ',') + 1);
	
	$midlane1 = str_replace("}","",$midlane1 );
	$midlane2 = str_replace("}","",$midlane2 );
	
	$midlane1 = str_replace(
		array('championId','highestAchievedSeasonTier','role','lane','winner','item0','item1','item2','item3',
				'item4','item5','item6','kills','deaths','assists','largestMultiKill'),
		array('championId0','highestAchievedSeasonTier0','role0','lane0','winner0','item00','item10','item20','item30',
				'item40','item50','item60','kills0','deaths0','assists0','largestMultiKill0'),
		$midlane1);

	$midlane2 = str_replace(
		array('championId','highestAchievedSeasonTier','role','lane','winner','item0','item1','item2','item3',
				'item4','item5','item6','kills','deaths','assists','largestMultiKill'),
		array('championId1','highestAchievedSeasonTier1','role1','lane1','winner1','item01','item11','item21','item31',
				'item41','item51','item61','kills1','deaths1','assists1','largestMultiKill1'),
		$midlane2);
		
		
	$midlane1 = str_replace(",",",</br>",$midlane1 );
	$midlane2 = str_replace(",",",</br>",$midlane2 );
	$testString = str_replace(",",",</br>",$testString );
	$string = $testString . $midlane1 . $midlane2;
	echo $string;
	?></td></tr></table></font></div>