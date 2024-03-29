<?php
require 'classes/root.php';
require 'classes/homeEdit.php';

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
					<a href="'.$root.'prijzen"><ul>Prijzen</ul></a>
					<a href="'.$root.'links"><ul>Links</ul></a>
					<a href="'.$root.'contact"><ul>Contact</ul></a>
				</li>
			</div>
			<div id="intro"><img id="introimg" src="'.$root.'images/rijschool/bovag.jpg"></img>
				'.text(1).'
			</div>
			<div id="xyz">
				<div class="xy"><img class="xyimg" src="http://127.0.0.1/RijschoolSMS/images/rijschool/todrive.png" />
					'.text(2).'
				</div>
				<div class="xy"><img class="xyimg" src="http://127.0.0.1/RijschoolSMS/images/rijschool/actie.png" />
					'.text(3).'
				</div>
			</div>
			<div class="plus">
				'.text(4).'
			</div>
		</div>
    </body>
</html>
';
?>