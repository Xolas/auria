<?php

namespace Auria\Data\Entity\System;

use Auria\Data\DataObject;
use Auria\Database\Connection\BaseConnection;
use Auria\Database\Reflection\Table as PhysicalTable;

/**
 * Description of Table
 *
 * @author nicholassouza
 */
class Table extends DataObject {

    /**
     *	Instance containing the physical information about this table
     * 
     * @var PhysicalTable $physical 
     */
    protected $physical;

    /**
     * 	Connection to the base database of auria
     * 
     * @var BaseConnection $baseConn 
     */
    protected $baseConn;
    
    /**
     *	All of this table columns objects
     * 
     * @var Column[] $columns 
     */
    protected $columns;

    /**
     * All of this table columns names
     * 
     * @var string[] $columnsName 
     */
    protected $columnsName;
    
    public function __construct($tableID) {

	$this->baseConn = BaseConnection::getInstance();

	$info = $this->baseConn->getTableInfo($tableID);

	foreach ($info as $prop => $val) {
	    $this->$prop = $val;
	}
    }
    /**
     * Start a query on this table
     * 
     * @return TableQuery
     */
    public function get() {
        
    }
    
    /**
     * Return a query prepared to return all registers from a table
     * 
     * @return TableQuery 
     */
    public function all() {
        
    }
    

}

class TableQuery {
    
    protected $columns = '*';
    protected $limit;
    protected $order;
    protected $conditions= array();
    
    /**
     * Table that will be queried
     * @var Table $table
     */
    protected $table;
    
    public function __construct(Table $table) {
        $this->table = $table;
    }
    
}