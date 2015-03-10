<?php
/**
 * Auria App
 *
 * @author Nicholas
 */
class AuriaApp {
    
    private $obStack = 0;
    
    public function __construct() {
        
    }
    
    public function startBuffer() {
        $this->obStack++;
        ob_start();
    }
    
    public function flushBuffer() {
        if($this->obStack > 0){
            ob_flush();
            $this->obStack--;
            return true;
        }else {
            return false;
        }
    }
    
    public function clearBuffer() {
        if($this->obStack > 0){
            ob_clean();
            $this->obStack--;
            return true;
        }else {
            return false;
        }
    }
    
}
