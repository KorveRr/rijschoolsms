<?php
session_start();
require 'connect.php';
require 'Text_replace.php';

$tr = new Text_replace;	

$sql = mysql_query("SELECT * FROM vragen,vragen1 ORDER BY vraag_id,vraag1_id DESC LIMIT 1");
$row = mysql_fetch_assoc($sql);

$id1 = $row['vraag_id'];
$id2 = $row['vraag1_id'];
$title1 = $row['vraag_title'];
$title2 = $row['vraag1_title'];
$text1 = $row['vraag_text'];
$text2 = $row['vraag1_text'];
$date1 = date("d-m-Y", strtotime( $row['vraag_date']));
$date2 = date("d-m-Y", strtotime( $row['vraag1_date']));


if(isset($_SESSION['username']))
{
	$faq1 = '<form action="faq" method="post"> 
			<textarea name="text">'.$text1.'</textarea>
			<input type="submit" name="text1" value="Edit">
	</form>';

	$faq2= '<form action="faq" method="post"> 
				<textarea name="text">'.$text2.'</textarea>
				<input type="submit" name="text2" value="Edit">
	</form>';	
}

if(!isset($_SESSION['username']))
{
	$faq1 = $tr->blogPost($text1);
	$faq2 =	$tr->blogPost($text2);
}

if(isset($_POST['text1'])){

	if(!empty($_POST['text'])){
		$text1 = mysql_real_escape_string($_POST['text']);
		$query = mysql_query("UPDATE vragen SET vraag_text = '".$text1."' WHERE vraag_id = '$id1'") or die(mysql_error());
		header("refresh:1; url=faq");
	}
}


if(isset($_POST['text2'])){

	if(!empty($_POST['text'])){
		$text2 = mysql_real_escape_string($_POST['text']);
		$query = mysql_query("UPDATE vragen1 SET vraag1_text = '".$text2."' WHERE vraag1_id = '$id2'") or die(mysql_error());
		header("refresh:1; url=faq");
	}
}

?>