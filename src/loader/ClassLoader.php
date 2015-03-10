<?php

namespace Auria\Loader;

/**
 * Description of ClassLoader
 *
 * @author Nicholas
 */
class ClassLoader {

    public function __construct() {
        
    }

    public function load($className) {

        if ($this->loadInnerClass($className)) {
            return;
        } elseif ($this->loadAuriaTable($className)) {
            return;
        }else {
            
        }
    }

    public function loadInnerClass($className) {
        
        $noAuria = str_replace('Auria\\', '', $className);
        $pieces = explode('\\', $noAuria);
        $toLower = "";

        foreach ($pieces as $k => $piece) {

            if (count($pieces) - 1 == $k) {
                $toLower .= '/' . $piece;
                break;
            }

            $toLower .= '/' . strtolower($piece);
        }

        $rightSlash = substr($toLower, 1);

        if (file_exists('src/' . $rightSlash . '.php')) {
            include_once 'src/' . $rightSlash . '.php';
            return true;
        } else {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/../src/';
            if (file_exists($path . $rightSlash . '.php')) {
                include_once 'src/' . $rightSlash . '.php';
                return true;
            }
        }
        return false;
    }

    public function loadAuriaTable($className) {
        
        
        
    }
}
