<?php
/**
 *   PHP SQLite 
 */

include_once("SQLite.class.php");

$db = new MyDB("newknow.sqlitedb");

$db->exec('CREATE TABLE foo (bar STRING)');
$db->exec("INSERT INTO foo (bar) VALUES ('This is a test')");

$result = $db->query('SELECT bar FROM foo');
var_dump($result->fetchArray());

?>
