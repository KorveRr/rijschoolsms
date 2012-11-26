<?php

class Text_replace{

	private $codes;
	private $replace;
	private $remove;
	
		public function __construct(){
        $this->codes = array(
                                '/\[b\](.*)\[\/b\]/iUs',
                                '/\[i\](.*)\[\/i\]/iUs',
                                '/\[u\](.*)\[\/u\]/iUs',
                                '/\[img\](.*)\[\/img\]/iUs',
                                '/\[url\](.*)\[\/url\]/iUs',
                                '/\[url=(.*)\](.*)\[\/url\]/iUs',
                                '/\[youtube\](.*)\[\/youtube\]/iUs',
                                '/\[youtube\]http:\/\/www.youtube.com\/watch?v=(.*)\[\/youtube\]/iUs',
                                '/\[p\](.*)\[\/p\]/iUs',



        );
        
        $this->replace = array(
                                '<strong>$1</strong>',
                                '<em>$1</em>',
                                '<u>$1</u>',
                                '<img class="bbcode_img" src="$1" alt="$1" />',
                                '<a class="bbcode_link" target="_blank" href="$1">$1</a>',
                                '<a class="bbcode_link" target="_blank" href="$1">$2</a>',
                                '<iframe width="420" height="315" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>',
                                '<iframe width="420" height="315" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>',
                                '<p>$1</p>'

        );
        
        $this->remove = array(
                                '$1',
                                '$1',
                                '$1',
                                '(*image*)',
                                '(*link*)',
                                '(*link*)',
                                '(*YouTube video*)',
                                '(*YouTube video*)',

                                
        );
	}

    public function remove_bb_code($text){
        return preg_replace($this->codes, $this->remove, $text);
    }
    public function replace_bb_codes($text){
        return preg_replace($this->codes, $this->replace, $text);
    }

   	public function blogPost($text){
   		
   		$text = htmlspecialchars($text);
   		$text = $this->replace_bb_codes($text);
   		$text = nl2br($text);

   		return $text;

   	}

   	    public function url_title($title){
        $return = preg_replace('/\s/', '_', $title);
        $return = preg_replace('/(_-_)/', '-', $return);
        $return = preg_replace('/[^a-zA-Z0-9-_]/', '', $return);
        return $return;
	}

}

?>