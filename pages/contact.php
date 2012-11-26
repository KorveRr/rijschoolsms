<?php
session_start();
require 'classes/root.php';

if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "originaljessee@hotmail.com";
    $email_subject = "Contact Formulier";
     
     
    function died($error) {
        // your error code can go here
        echo "Er zijn fouten opgetreden bij het invullen van het Contact formulier.";
        echo "De volgende fouten zijn gevonden.<br /><br />";
        echo $error."<br /><br />";
        echo "Maak de fouten<br /><br />";
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('Er zijn fouten bij het door u ingevulde contact formulier.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Het Email address is ongeldig.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Voornaam is niet goed<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Achternaam is niet goed<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'Het bericht is niet goed.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Meer informatie beneden.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
}  

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
			<form name="contactform" method="post" action="'.$root.'contact">
			<table width="450px">
				<tr>
 				<td valign="top">
				  <label for="first_name">Voornaam *</label>
				 </td>
		 <td valign="top">
		  <input  type="text" name="first_name" maxlength="50" size="30">
		 </td>
		</tr>
		<tr>
		 <td valign="top"">
		  <label for="last_name">Achternaam *</label>
		 </td>
		 <td valign="top">
		  <input  type="text" name="last_name" maxlength="50" size="30">
		 </td>
		</tr>
		<tr>
		 <td valign="top">
		  <label for="email">Email *</label>
		 </td>
		 <td valign="top">
		  <input  type="text" name="email" maxlength="80" size="30">
		 </td>
		</tr>
		<tr>
 		<td valign="top">
  			<label for="telephone">Telefoon nummer</label>
 		</td>
 		<td valign="top">
  			<input  type="text" name="telephone" maxlength="30" size="30">
 		</td>
		</tr>
		<tr>
 		<td valign="top">
  			<label for="comments">Bericht *</label>
 		</td>
 		<td valign="top">
  			<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 		</td>
		</tr>
		<tr>
 		<td colspan="2" style="text-align:center">
  			<input type="submit" value="Submit"> 
 		</td>
		</tr>
		</table>
		</form>
		</div>
    </body>
</html>
';

?>