<?php
	class DBHelper{
		private $conn;
		public function __construct(){
			$this->conn = mysql_connect("localhost" , "davidnk");
			mysql_select_db("newknow",$this->conn);
		}
		
		public function query( $sql="" ){
			$rows = mysql_query($sql , $this->conn);
			$result = array();
			while( $row = mysql_fetch_assoc( $rows ) ){
				array_push( $result , $row );
			}
			return $result;
		}
		public function insert( $sql="" ){
			echo $sql;
			return mysql_query( $sql );
		}
		public function close(){
			return mysql_close( $this->conn );
		}
	}	
?>
