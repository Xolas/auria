<?php

namespace Auria\Data\Entity\System;

use Auria\Database\Reflection\Table as PhysicalTable;
use Auria\Database\Reflection\TableReflector;
use \Auria\Database\Connection\BaseConnection;

/**
 * Description of AuriaTable
 *
 * @author Nicholas
 */
class AuriaTable extends Table {

    public function __construct() {
        $this->baseConn = BaseConnection::getInstance();
        $reflector = new TableReflector($this->baseConn);
        
        $this->physical = $reflector->relfectTable("auria_table", true);
        $this->columns = AuriaColumn::getAllColumns();
    }
    
    

}
