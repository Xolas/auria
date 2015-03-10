<?php
namespace Auria\Database\Reflection;

use \Auria\Database\Connection;

/**
 * Description of Tabl
 *
 * @author nicholassouza
 */
class Table {
    
    /**
     *
     * @var string $name 
     */
    protected $name;
    
    /**
     *
     * @var Connection 
     */
    protected $connection;
    
    /**
     *
     * @var string $tablespace 
     */
    protected $tablespace;
    
    /**
     *
     * @var string $database 
     */
    protected $database;
    
    /**
     *	
     * @var Column[] $columns 
     */
    protected $columns;
    
    /**
     *	
     * @var string $driver 
     */
    protected $driver;
    
    public function setExtra($field, $value) {
        
	if(!in_array($field,array( 'database','name','collation','driver'))){
	    $this->$field = $value;
	}
        
    }
    
    public function getName() {
	return $this->name;
    }

    public function getConnection() {
	return $this->connection;
    }

    public function getDatabase() {
	return $this->database;
    }

    public function getColumns() {
	return $this->columns;
    }

    public function getDriver() {
	return $this->driver;
    }

    public function setName($name) {
	$this->name = $name;
	return $this;
    }

    public function setConnection($connection) {
	$this->connection = $connection;
	return $this;
    }

    public function setDatabase($database) {
	$this->database = $database;
	return $this;
    }

    public function setColumns(array $columns) {
	$this->columns = $columns;
	return $this;
    }

    public function setDriver($driver) {
	$this->driver = $driver;
	return $this;
    }
    
    public function addColumns(Column $column) {
	$this->columns[$column->name] = $column;
	return $this;
    }


    
}