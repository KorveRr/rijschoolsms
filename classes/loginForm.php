<?php
require 'connect.php';
require 'root.php';

$username = '';
$password = '';
session_start ();
if(isset($_POST['username']))
	$username = $_POST['username'];
if(isset($_POST['password']))
	$password = $_POST['password'];

if ($username&&$password)
{
	$query = mysql_query("SELECT * FROM users WHERE username='$username'");
	
	$numrows = mysql_num_rows($query);
	
	if($numrows!=0)
	{
		while ($row = mysql_fetch_assoc($query))
		{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
			$activated = $row['activated'];
			
			if ($activated=='0')
				{
					die("Je acount is nog niet geactiveerd.");
					exit();
				}
				
		}
		$password= sha1($password);
		if ($username==$dbusername&&$password==$dbpassword)
		{
			header("Location: $root");	
			$_SESSION['username']=$username;
		}
		else
		echo "incorrect password!";
	}
	else
	die("That username doesn't exist!");
	
}

if (isset($_POST['logout']))
{
	//$message = "je bent succesvol uitgelogd";
	unset ($_SESSION['username']);
	header("Location: $root");	
}

if(!isset($_SESSION['username'])){		
$form = '
		<form action="" method="POST">
	    	<p>Username:<input type="text" name="username"></p>
	        <p>Password:<input type="password" name="password"></p>
	        <input type="submit" value="log in">
	    </form>';
}

elseif(isset($_SESSION['username'])){

	$form = " "; 
	//$message = "Welkom, ".$_SESSION['username']."<br />" ;
	$form = "<form action='' method='post'>
   <input type='submit' name='logout' value='Loguit'>
   </form>";
}

	
?>