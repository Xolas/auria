<?php
namespace Auria\Data;

use Auria\Data\Type;

/**
 *  Standart data class,
 * all entities that represent data must extend this class as it provides
 * quick ways to do most of the operations (include, update, delete).
 * 
 * @package data
 * 
 * @version 1.0 
 *
 * @author Nicholas Frai <nicfrai@gmail.com>
 */
class DataObject {
    
    /**
     *
     * @var int $id 
     */
    protected $id;
    
    /**
     *
     * @var boolean $active 
     */
    protected $active;
    
    /**
     *
     * @var boolean $locked 
     */
    protected $locked;
    
    /**
     *
     * @var boolean $deleted 
     */
    protected $deleted;
    
    /**
     *
     * @var Type\DateTime $date_created
     */
    protected $date_created;
    
    /**
     *
     * @var Type\DateTime $date_updated 
     */
    protected $date_updated;
    
    /**
     *
     * @var Type\DateTime $date_deleted 
     */
    protected $date_deleted;
    
    /**
     *
     * @var int $objId 
     */
    protected $objId;
    
    /**
     *
     * @var string $objPKField 
     */
    protected $objPKField;
    
    /**
     *
     * @var int $objTableID 
     */
    protected $objTableID;
    
    /**
     *
     * @var Entity\System\Table $tableObj 
     */
    protected $tableObj;
    
    public function getActive() {
	return $this->active;
    }

    public function getLocked() {
	return $this->locked;
    }

    public function getDeleted() {
	return $this->deleted;
    }

    public function getObjId() {
	return $this->objId;
    }

    public function getObjPKField() {
	return $this->objPKField;
    }

    public function getObjTableID() {
	return $this->objTableID;
    }

    public function setActive($active) {
	$this->active = $active;
	return $this;
    }

    public function setLocked($locked) {
	$this->locked = $locked;
	return $this;
    }

    public function setDeleted($deleted) {
	$this->deleted = $deleted;
	return $this;
    }

    public function setObjId($objId) {
	$this->objId = $objId;
	return $this;
    }

    public function setObjPKField($objPKField) {
	$this->objPKField = $objPKField;
	return $this;
    }

    public function setObjTableID($objTableID) {
	$this->objTableID = $objTableID;
	return $this;
    }


    public function delete() {
	$this->date_deleted = date('y-m-d h:i:s');
    }
    
    public function update($newValues = array()) {
	
	foreach($newValues as $prop=>$val) {
	    $this->$prop = $val;
	}
	
	$this->date_updated = date('y-m-d h:i:s');
    }
    
    public function create() {
	
	$this->date_created = date('y-m-d h:i:s');
	
    }
    
    public function __clone() {
        
	$nInst = new DataObject();
	
	foreach($this as $prop=>$val){
	    $nInst->$prop = $val;
	}
	
	$nInst->id = 0;
	$nInst->objId = 0;
	
	return $nInst;
    }
    
    
}