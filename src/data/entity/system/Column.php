<?php
namespace Auria\Data\Entity\System;

use Auria\Data\DataObject;
use Auria\Database\Reflection\Column as PhysicalColumn;
/**
 * Description of Column
 *
 * @author nicholassouza
 */
class Column extends DataObject{
    
    
    /**
     *	This column mother table
     * 
     * @var Table $table 
     */
    protected $table;
    
    /**
     *	This column name
     * 
     * @var string $name 
     */
    protected $name;
    
    /**
     *	Column friendly name (can be a TextResource)
     * 
     * @var string|TextResource $title 
     */
    protected $title;
    
    /**
     *	Information about the physical columns represented by this class
     * 
     * @var PhysicalColumn $physical 
     */
    protected $physical;
    
    /**
     *	Either this is a virtual or real column
     * 
     * @var boolean $virtual 
     */
    protected $virtual = false;
    
    /**
     *	Creates an empty column binded to a table
     * 
     * @param Table $table
     */
    public function __construct($table) {
	$this->table = $table;
    }
    public function isVirtual() {
	return (boolean) $this->virtual;
    }
    
    public function getPhysicalInfo() {
	return $this->physical;
    }
    
    public function loadPhysicalInfo() {
	
    }
    /**
     * 
     * @param PhysicalColumn $physicalInfo
     */
    public function setPhysicalInfo($physicalInfo) {
	
    }
    
}