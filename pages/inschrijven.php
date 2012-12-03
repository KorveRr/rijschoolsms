<?php
session_start();
require 'classes/root.php';

$content = '
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RijschoolSMS - Slaag Met Succes</title>
	<meta name="author" content="Jesse Korver"/>
	<link rel="stylesheet" media="screen" href="'.$root.'styles/reset.css" >
	<link rel="stylesheet" media="screen" href="'.$root.'styles/main.css" >
	<link rel="stylesheet" media="screen" href="'.$root.'styles/inschrijven.css" >
	<link href=\'http://fonts.googleapis.com/css?family=Open+Sans\' rel=\'stylesheet\' type=\'text/css\'>

</head>
	<body>
		<div id="container">
			<div id="banner">
				<div id="logo"></div>
				<h1>Slaag Met Succes</h1>
				<div id="bannerxy">
					<div class="social"></div>
					<div class="social"></div>
					<div class="social"></div>
					<div class="social"></div>
					<div class="text">Mail: info@rijschoolsms.nl | Tel: 06-22122244</div>
				</div>
			</div>
			<div id="nav">
				<li>
					<a href="'.$root.'home"><ul>Home</ul></a>
					<a href="'.$root.'"><ul>Auto</ul></a>
					<a href="'.$root.'inschrijven"><ul>Inschrijven</ul></a>
					<a href="'.$root.'faq"><ul>Veel gestelde vragen</ul></a>
					<a href="'.$root.'prijzen"><ul>Prijzen</ul></a>
					<a href="'.$root.'links"><ul>Links</ul></a>
					<a href="'.$root.'contact"><ul>Contact</ul></a>
				</li>
			</div>
			<h2>Inschrijfformulier:</h2>
			<form action="'.$root.'inschrijven" method="POST">
					Naam:<input type="text" class="form" name="name" maxlength="50"><br /><br />
					Voorletters:<input type="text" class="form" name="firstletter" maxlength="5"><br /><br />
					Man/Vrouw:<SELECT name="gent">
					<OPTION value="Man">Man</OPTION>
					<OPTION selected value="Vrouw">Vrouw</OPTION>
					</SELECT><br /><br />
					Roepnaam:<input type="text" class="form" name="name" maxlength="50"><br /><br />
					Adres:<input type="text" class="form" name="name" maxlength="50"><br /><br />
					Postcode:<input type="text" class="form" name="name" maxlength="50"><br /><br />
					Woonplaats:<input type="text" class="form" name="name" maxlength="50"><br /><br />
					Telefoonnummer:<input type="text" class="form" name="name" maxlength="50"><br /><br />
					Geboortedatum:<input type="text" class="form" name="name" maxlength="50"><br /><br />
					Datum van inschrijven:<input type="text" class="form" name="name" maxlength="50"><br /><br />

					<b>Praktijkopleiding:</b><br />
					<input type="checkbox" name="sort" value="B">B Personenauto<br />
					Start opleiding:<input type="text" class="form" name="name" maxlength="50"><br /><br />

					<b>Betalingswijze</b><br />
					<input type="checkbox" name="price" value="contant">Contant<br />
					<input type="checkbox" name="price" value="knipkaart">Knipkaart (5 of 10 vooruit betalen bij eerste rijles)<br />
					<input type="checkbox" name="price" value="30uur">30 uur Pakket (Contant of factuur te betalen binnen acht dagen.)<br />
					<input type="checkbox" name="price" value="40uur">40 uur Pakket (Contant of factuur te betalen binnen acht dagen.)<br />
					<br />
					Kan lessen <input type="checkbox" name="les" value="ochtend">in de ochtend, <input type="checkbox" name="les" value="middag">in de middag, <input type="checkbox" name="les" value="avond">in de avond / <input type="checkbox" name="les" value="zaterdag">op zaterdag.<br />
					<br />
					Door dit formulier te versturen gaat u akkoord met de algemene betalingsvoorwaarden.<br />

					<input type="submit" value="Versturen">
			</form>
				<div id="formright">
					RijschoolSMS<br />
					Julianaplein 8<br />
					1623 JM Hoorn<br />
					<br />
					ING bank nr. 5623438<br />
					Kvk Hoorn nr. 50319264<br />
					BTW-nr. 88375407<br />
					<br />
					Download schriftelijk Inschrijfformulier - <a href="'.$root.'doc/Inschrijfformulier.doc">Download</a>
				</div>
		</div>
    </body>
</html>
';
?>