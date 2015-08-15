<html>
	  <head>
		<title>Riot Games Splash Art Test</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="riotapi.js"></script>
	</head>
	<body onload = "startTimeout()">
	<?php
		echo '<div id="backgroundImagesBottom" style="position : fixed; z-index: 1;">
		<table id="tableImagesBottom" border="0" cellspacing="0" cellpadding="0" style= "visibility: hidden;">';
		for ($i = 0; $i < 10; $i++) {
			echo '<tr>';
			for ($j = 0; $j < 11; $j++) {
				if ($i%2 == 1) {
					echo '<td style="margin-top:30px;"><img id="imgBot' . $i . $j . '" style="position: relative; left:-96px;" class="bottom" src="/LoL Splash Art/SplashArt' . rand(0,500) . '.jpg" /></td>';
				} else {
					echo '<td style="margin-top:30px;"><img id="imgBot' . $i . $j . '" class="bottom" src="/LoL Splash Art/SplashArt' . rand(0,500) . '.jpg" /></td>';
				}
			}
			echo '</tr>';
		}
		echo '</table>';
		
		echo '<div id="backgroundImagesTop' . $i . $j . '" style="position : fixed; z-index: 2;">
		<table id="tableImagesTop" border="0" cellspacing="0" cellpadding="0" style="margin-top:-1188px; visibility: hidden;">';
		for ($i = 0; $i < 10; $i++) {
			echo '<tr>';
			for ($j = 0; $j < 11; $j++) {
				if ($i%2 == 0) {
					echo '<td width="10%" style="height:108px;"><img id="imgTop' . $i . $j . '" style="position: relative; left:-96px;" class="top" src="/LoL Splash Art/SplashArt' . rand(0,500) . '.jpg" /></td>';
				} else {
					echo '<td width="10%" style="height:108px;"><img id="imgTop' . $i . $j . '" class="top" src="/LoL Splash Art/SplashArt' . rand(0,500) . '.jpg" /></td>';
				}
			}
			echo '</tr>';
		}
		echo '</table>';
	?>
	</body>
</html>