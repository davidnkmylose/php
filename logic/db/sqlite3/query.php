<?php
/**
 *   PHP SQLite 
 */

include_once("SQLite.class.php");

$db = new MyDB();

$result = $db->query('select bar from foo;');
var_dump($result->fetchArray());

?>
