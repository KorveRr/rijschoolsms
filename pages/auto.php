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
					<a href="'.$root.'auto"><ul>Auto</ul></a>
					<a href="'.$root.'inschrijven"><ul>Inschrijven</ul></a>
					<a href="#"><ul>Veel gestelde vragen</ul></a>
					<a href="#"><ul>Prijzen</ul></a>
					<a href="#"><ul>Links</ul></a>
					<a href="#"><ul>Contact</ul></a>
				</li>
			</div>
			<div id="intro">
			<img class="auto" src="'.$root.'images/rijschool/bmw1.jpeg" alt="auto"></img><br />
			Onze rijlessen worden verzorgd in een BMW 1 serie.<br />
			Deze auto is voorzien van de nieuwste technische voorzieningen om het rijden nog gemakkelijker en aangenamer te maken.<br />
			Denk hierbij aan stuurbekrachtiging. ABS remsysteem, Cruise control.<br />
			Bovendien kunnen, zowel kleine als grote personen de stoel en het stuur probleemloos op hun eigen wensen aanpassen; de bestuurdersstoel is namelijk, naast de gebruikelijke instellingen, ook in hoogte verstelbaar en het stuur is in hoogte en lengte verstelbaar.<br />
			De airco maakt dat het lessen ook in de zomer aangenaam is.<br />
			<img class="auto" src="'.$root.'images/rijschool/bmw2.jpeg" alt="auto"></img>
			</div>
		</div>
    </body>
</html>
';
?>