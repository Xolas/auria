<?php

namespace Auria\Database\Connection;

/**
 * Description of MysqlConnection
 *
 * @author nicholassouza
 */
class MysqlConnection extends \mysqli implements Connection {

    protected $schema;

    public function describeColumn($table,$column) {

	$query = " SELECT "
		. "	`TABLE_SCHEMA`	    as \"database\","
		. "	`TABLE_NAME`	    as \"table\","
		. "	`COLUMN_NAME`	    as \"name\","
		. "	`COLUMN_DEFAULT`    as \"default\","
		. "	`IS_NULLABLE`	    as \"is_null\","
		. "	`DATA_TYPE`	    as \"type\","
		. "	`COLUMN_KEY`	    as \"key\","
		. "	`EXTRA`		    as \"is_auto_increment\","
		. "	`CHARACTER_MAXIMUM_LENGTH` as \"char_size\","
		. "	CONCAT(COALESCE(`NUMERIC_PRECISION`,''),',',COALESCE(`NUMERIC_SCALE`,'')) as \"num_size\""
		. " FROM "
		. "	information_schema.`COLUMNS`"
		. " WHERE"
		. "	`TABLE_NAME` = '$table'"
		. ($column == "*" ? "" : "	AND `COLUMN_NAME` = '$column'")
		. "	AND `TABLE_SCHEMA`='auria'";


	if (($stmt = $this->query($query))) {

	    $columns = array();

	    while (($ans = $stmt->fetch_object())) {
		$columns[] = $ans;
	    }

	    return $columns;
	} else {
	    return false;
	}
    }

    public function describeTable($table) {

	$query = " SELECT "
		. "	`TABLE_NAME`	    as \"name\", "
		. "	`AUTO_INCREMENT`    as \"auto_increment\", "
		. "	`TABLE_SCHEMA`	    as \"database\", "
		. "	`TABLE_ROWS`	    as \"num_rows\","
		. "	`TABLE_COLLATION`   as \"collation\", "
		. "	\"mysql\"	    as \"driver\""
		. " FROM "
		. "	information_schema.`TABLES` "
		. " WHERE "
		. "	`TABLE_TYPE`<>'SYSTEM VIEW' "
		. "	AND `TABLE_NAME`='$table'"
		. "	AND `TABLE_SCHEMA`='auria'";
	if (($stmt = $this->query($query))) {
	    if (($ans = $stmt->fetch_object())) {
		return $ans;
	    } else {
		return false;
	    }
	} else {
	    return false;
	}
    }
    
    public function getTableRelations($table) {
	
    }

    public function getSchema() {
	return $this->schema;
    }

    /**
     * 
     * @param string $query
     * @return \mysqli_result
     */
    public function query($query) {
	return parent::query($query);
    }

}