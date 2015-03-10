<?php

/**
 * Description of Language
 *
 * @author nicholassouza
 */
class Language {
    
    private static $DEFAULT_LANG = 'en-us';
    
    protected $lang = 'en-us';
    
    public function __construct($lang = "") {
	
	if($lang != "")
	    $this->lang = $lang;
	else
	    $this->lang = self::$DEFAULT_LANG;
	
    }
    
    protected function loadLangFile($lang) {
	
	
    }
    
    
}