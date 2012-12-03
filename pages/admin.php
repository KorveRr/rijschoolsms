<?php
require 'classes/root.php';
require 'classes/connect.php';
require 'classes/loginForm.php';


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
					<a href="'.$root.'faq"><ul>Veel gestelde vragen</ul></a>
					<a href="'.$root.'prijzen"><ul>Prijzen</ul></a>
					<a href="'.$root.'links"><ul>Links</ul></a>
					<a href="'.$root.'contact"><ul>Contact</ul></a>
				</li>
			</div>
			'.$form.'
		</div>
    </body>
</html>
';
?>