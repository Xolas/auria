<?php

namespace Auria\Database\Reflection;

use Auria\Database\Connection\Connection;

/**
 *  Physical table reflection, helping to get data from a database
 * ans put it in a class (Table).
 * 
 *  The dirty work is done by the connection subclasses that actually retrieve 
 * data from their database to fill in the needed metadata.
 *
 * @package database.connection
 * @version 1.0.0
 * @author Nicholas Frai <nicfrai@gmail.com>
 */
class TableReflector {

    /**
     *	Database connection abstraction object
     * 
     * @var Connection $connection 
     */
    protected $connection;

    /**
     *	initialzie the reflector with a database connection
     * 
     * @param Connection $conn
     */
    public function __construct($conn) {
	$this->connection = $conn;
    }

    /**
     *	Retrieves info from a database table
     * 
     * @param string $table The table name (schema must be set on the connection)
     * @param boolean $withFields   If the columns of this table should be loaded aswell
     * 
     * @return \Auria\Database\Reflection\Table
     */
    public function relfectTable($table,$withFields = false) {

	$tblInfo = $this->connection->describeTable($table);
        
	$tableObj = new Table();

	$tableObj
		->setName($tblInfo->name)
		->setDatabase($this->connection->getSchema())
		->setDriver($tblInfo->driver)
		->setConnection($this->connection);

	foreach ($tblInfo as $prop => $val) {
	    $tableObj->setExtra($prop,$val);
	}
	if($withFields){
	    
	    $columnsInfo = $this->connection->describeColumn($table,'*');
	    
	    foreach($columnsInfo as $columnInfo) {
		$cObj = new Column();
		foreach($columnInfo as $prop=>$val){
		    $cObj->$prop = $val;
		}
		$cObj->table = $tableObj;
		
		$tableObj->addColumns($cObj);
	    }
	}
	
	return $tableObj;
    }

}