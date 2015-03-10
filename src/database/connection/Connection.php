<?php

namespace Auria\Database\Connection;

/**
 *
 * @author nicholassouza
 */
interface Connection {
    
    public function describeTable($table);
    
    public function describeColumn($table,$column);
    
    public function query($query);
    
    public function getSchema();
    
}