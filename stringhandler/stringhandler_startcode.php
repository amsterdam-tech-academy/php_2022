<!DOCTYPE html>
<html lang="nl">
	 <head>
		<meta charset="utf-8">
		<meta name="description" content="PHP scripting">
		<meta name="author" content="Ed">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>PHP String handler</title>
	</head>
	 <body>
		 <?php
		 // afhandeling formulier
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit html
			 }
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string
			 }
			// "schrijf hier de benodigde code"
		  ?>
		<img src ="https://www.amsterdamtechacademy.nl/userfiles/amsterdamtechacademy.nl/images/Amsterdam_Tech_Academy_Logo_Geenwitruimte-01.png"  alt = "logo" width = "150">
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend>PHP Stringhandler</legend>
				 <input type = "text" name = "input1"  placeholder = "string 1"><br>
				 <input type = "text" name = "input2"   placeholder = " string 2">
				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
			<?php
					// "schrijf hieronder de benodigde code"
			?><ul>
					<li class="showSpaces">Ingevoerde string 1: <span> <?php  echo $input1;  ?></span> </li>
					<li class="showSpaces">Ingevoerde string 2: <span>  <?php  echo "bedenk deze code zelf"  ?></span> </li>
					<li>String 1 getrimd trim():  <?php  echo "bedenk deze code zelf"  ?> </li>
					<li></li>
					<li></li>
					<li>String 3 is de concatenation van string 1 en string 2: <span><?php  $input3 = $input1 . $input2; echo $input3; ?></span> </li>
					<li></li>
					<li></li>
				</ul>
				<hr>
				<h4>Opdrachten</h4>
				<ul>
					<li>Opdracht compleet:<br> Stringhandler. Maak de PHP code voor <a href="https://linearb.nl/ata/php/stringhandler/index.php?">Stringhander<a>
					</li>
				</ul>
				<hr>				
				<ol>
					<li>
						Eerste stap: maak de PHP code die de 2 ingevoerde strings <a href="https://linearb.nl/ata/php/stringhandler/index.php?">zie demo<a> analyseert
					</li>
					<li>
						Tweede stap: maak PHP code waarmee jij controleert of een input een geldig e-mail adres zou kunnen zijn. Met JS controleren is niet toegestaan.
					</li>
					<li>
						Derde stap: na submitten form, schrijf de eerder ingevoerde strings terug met PHP in de formulier invoer velden
					</li>
					<li>Vierde stap: pas het CSS naar eigen inzicht aan</li>
				</ol>
		</div>
	 </body>
</html>
