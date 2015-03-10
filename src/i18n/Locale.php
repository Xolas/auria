<?php

/**
 * Description of Locale
 *
 * @author nicholassouza
 */
class Locale {
    
    /**
     *	Unique instance of the Locale class
     * 
     * @var Locale $self 
     */
    protected static $self;
    
    protected static $lang = 'en-us';
    
    public static function setLanguage($lang) {
	self::$lang = $lang;
    }
    
    public static function getInstance() {
	if(self::$self == null)
	    self::$self == new Locale;
	
	return self::$self;
    }
    
    private function __construct() {
    }
    
    private function __clone() {
    }
    
    public function init() {
	
    }
    
    
}