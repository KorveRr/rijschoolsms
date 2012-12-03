<?php
session_start();
require 'connect.php';
require 'Text_replace.php';

$tr = new Text_replace;	

$sql = mysql_query("SELECT * FROM home ORDER BY home_id DESC LIMIT 1");
$row = mysql_fetch_assoc($sql);

$id1 = $row['home_id'];
$title1 = $row['home_title'];
$text1 = $row['home_text'];
$date1 = date("d-m-Y", strtotime( $row['home_date']));

function text($id){
	$tr = new Text_replace;	
	$return = '[Item niet gevonden]';

	$query = mysql_query("SELECT * FROM home WHERE home_id = '".mysql_real_escape_string($id)."'");
		if(mysql_num_rows($query) !== 0){
			$row =  mysql_fetch_assoc($query);


			if(isset($_SESSION['username'])){
				$return = '<form action="home" method="post"> 
							<input type="hidden" name="id" value="'.$row['home_id'].'" />
							<textarea name="text">'.$row['home_text'].'</textarea>
							<input type="submit" name="text1" value="Edit">
					</form>';
			}

			if(!isset($_SESSION['username'])){

				$text = $tr->blogPost($row['home_text']);
				$return = $text;
			}
		}
		return $return;
	}

if(isset($_POST['text1'])){

	if(!empty($_POST['text'])){
		$text1 = mysql_real_escape_string($_POST['text']);
		$query = mysql_query("UPDATE home SET home_text = '".$text1."' WHERE home_id = '".mysql_real_escape_string($_POST['id'])."'") or die(mysql_error());
		header("refresh:1; url=home");
	}
}
?>