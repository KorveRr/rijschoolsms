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
	<link rel="stylesheet" media="screen" href="'.$root.'/styles/reset.css" >
	<link rel="stylesheet" media="screen" href="'.$root.'/styles/main.css" >
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
					<a href="'.$root.'auto"><ul>Auto</ul></a>
					<a href="'.$root.'inschrijven"><ul>Inschrijven</ul></a>
					<a href="'.$root.'faq"><ul>Veel gestelde vragen</ul></a>
					<a href="#"><ul>Prijzen</ul></a>
					<a href="#"><ul>Links</ul></a>
					<a href="'.$root.'contact"><ul>Contact</ul></a>
				</li>
			</div>
			<div id="intro"><img id="introimg" src="'.$root.'images/rijschool/bovag.jpg"></img>
Van harte welkom op onze website<br />
<br />
Op deze site word je zo uitgebreid mogelijk geïnformeerd over de activiteiten van rijschool SMS
(Slaag Met Succes).<br />
De rijschool waar je terecht kunt voor je rijbewijs B, in West friesland.<br />
<br />
Natuurlijk wil je graag zo snel mogelijk in het bezit komen van het felbegeerde roze pasje.
Ook wil je de zekerheid dat je straks als zelfstandige, veilige en besluitvaardige bestuurder door het verkeer gaat. Hiervoor ben je bij Rijschool SMS aan het juiste adres.
Daarom willen we je uitnodigen om eens rustig rond te kijken op onze site. Grote kans dat je zult vinden wat je zoekt. 
Wil je nog uitgebreider worden geïnformeerd, dan staan we je graag telefonisch te woord 
06 22 12 22 44.
			</div>
			<div class="xy"><img class="xyimg" src="http://127.0.0.1/RijschoolSMS/images/rijschool/todrive.png"></img>
			Met 2toDrive kan je al vanaf je 16e jaar je theorie-examen voor rijbewijs B doen. Vanaf 16,5 jaar kan je dan al met je praktijklessen starten en na je 17e kan je vervolgens het praktijkexamen bij het CBR doen. 
			<br /><br />
Rijschool SMS is klaar voor 2toDrive; we zijn goed voorbereid en merken een brede belangstelling bij zowel jongeren als coaches. 2toDrive loopt als een experiment met een looptijd van maximaal 6 jaar.
<br /><br />
In 2015 zal de Stichting Wetenschappelijk Onderzoek Verkeersveiligheid een tussentijdse evaluatie doen. Als het experiment positief uitpakt, kan 2toDrive definitief worden ingevoerd.
			</div>
			<div class="xy"><img class="xyimg" src="http://127.0.0.1/RijschoolSMS/images/rijschool/actie.png"></img>
			ACTIE!!!!

			1e 10-urenkaart voor maar € 300 

			KLIK HIER of bel naar 06 22 12 22 44 </div>
		</div>
    </body>
</html>
';
?>