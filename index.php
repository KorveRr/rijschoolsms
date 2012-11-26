<?php
error_reporting(-1);
	include 'classes/cleanUrl.php';
	$c = new cleanUrl;
	
	if(empty($c->url[0]) || $c->url === 'index.php'){
		$page = 'home';
	}
	else{
		switch($c->url[0]){
		
		case 'home';
			$page = 'home';
		break;

		case 'inschrijven':
			$page = 'inschrijven';
		break;

		case 'auto':
			$page = 'auto';
		break;

		case 'faq':
			$page = 'faq';
		break;

		case 'contact':
			$page = 'contact';
		break;

		case 'admin':
			$page = 'admin';
		break;

		default:
			$page = '404';
		break;
		}
	}
	
	function webPage($page){

		$filepath = 'pages/';
		$file = $page.'.php';

		if(!empty($page)){
			if(file_exists($filepath.$file)){
				require 'pages/'.$page.'.php';
				echo $content;
			}
			else{
				$page = '404';
			}
		
		}
	}


	webPage($page);
	/*echo '<pre>';
	print_r($c->url);*/

?>