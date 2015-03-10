<?php

namespace Auria\Database\Connection;

/**
 * Auria connection to the main database
 *
 * @author nicholassouza
 */
class BaseConnection extends MysqlConnection {

    private static $self;

    public static function getInstance() {
	
	if (self::$self == null) {
	    self::$self = new BaseConnection();
	}
	
	return self::$self;
    }
    
    protected $tableInfo = array();
    
    protected $fieldInfo = array();

    private $host = 'localhost';

    private $user = 'root';

    private $pass = 'ld98559x';

    private $db = 'auria';

    private function __construct() {
	parent::connect($this->host,$this->user,$this->pass,$this->db);
	if ($this->connect_error) {
	    echo "erro!" . print_r($this->connect_error,true);
	} else {
	    echo "connected!";
	}
    }

    public function getSchema() {
	return 'auria';
    }
    
    public function getTableInfo($tableID) {
	
	if(isset($this->tableInfo[$tableID])){
	    return $this->tableInfo[$tableID];
	}
	
	$query = " SELECT "
		. "	*"
		. " FROM "
		. "	`auria_table`"
		. " WHERE"
		. "	id=$tableID";
	
	if( ($stmt = $this->query($query)) ){
	    return $this->tableInfo[$tableID] = $stmt->fetch_object();
	}
	
	
    }
    
    public function getFieldInfo($fieldID) {
	
	if(isset($this->fieldInfo[$fieldID])){
	    return $this->fieldInfo[$fieldID];
	}
	
	$query = " SELECT "
		. "	*"
		. " FROM "
		. "	field"
		. " WHERE"
		. "	id=$fieldID";
	
	if( ($stmt = $this->query($query)) ){
	    return $this->fieldInfo[$fieldID] = $stmt->fetch_object();
	}
    }

}