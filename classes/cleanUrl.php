<?php

class cleanUrl {
	
	public $url;
	private $online = 0; /*Offline = 0, Online = 1 */

	public function __construct() {
		$this->clean_url();
	}

	private function clean_url(){
		$this->url = explode("/",$_SERVER['REQUEST_URI']);
		array_shift($this->url);
		$this->url = array_map('strtolower', $this->url);
		$this->clean_array();
	
	}

	private function clean_array(){
		if($this->online === 0){
			array_splice($this->url, 0, 1);
		}
	}

	private function root(){
		if($this->online === 1){
			$root = 'http://127.0.0.1/RijschoolSMS/';
		}
	}

}
?>