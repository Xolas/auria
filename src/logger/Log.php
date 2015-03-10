<?php
/**
 * Description of Log
 *
 * @author Nicholas
 */
class Log {
    
    const LOG_FILE = 'file';
    const LOG_STD_ERR = 'stderr';
    const LOG_JS = 'js';
    
    const LOG_LVL_ERROR = 'error';
    const LOG_LVL_WARN = 'warning';
    const LOG_LVL_INFO = 'info';
    
    private static $logType = self::LOG_JS;
    
    private static function logIt($code, $type, $message,$showDefault) {
        
    }
    
    public static function error($code, $message, $showDefaultInfo = true){
        
    }
    
    public static function warning($code, $message, $showDefaultInfo = true){
        
    }
    
    public static function info($code, $message, $showDefaultInfo = true){
        
    }
}
