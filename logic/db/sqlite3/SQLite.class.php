<?php
/**
 *   PHP SQLite 
 */

class MyDB extends SQLite3{
    function __construct( $db="mysqlitedb.db"){
        $this->open($db);
    }
}


?>
