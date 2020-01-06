<?php
class Db{
	
	private $options;
	private $db;
	private $sql;
	private $statement;
	private $data;
	
	function __construct($dbms, $host, $port, $dbname, $uname, $pword) {
		$this -> options = [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
												 PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL ];
		$this -> db = new PDO($dbms . ':host=' . $host
										. ';port=' . $port
										. ';dbname=' . $dbname,
										$uname, $pword,
										$this -> options);
		$this -> db -> query('SET NAMES utf8');
	}
	
	function selectDb($selection, $where){
		$this -> sql = 'SELECT ' . $selection . ' FROM xtf1_user ' . $where;
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
		$this -> data = $this -> statement -> fetchAll();
		return $this -> data;
	}
	
	function insertDb($data) {
		$this -> sql = 'INSERT INTO xtf1_user (username, email, password) VALUES (?, ?, ?)';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute($data);
}

	function updateDb($selection, $update, $user){
		$this -> sql = 'UPDATE xtf1_user SET ' . $selection . ' = "' . $update . '" WHERE username = "' . $user . '"' ;
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}
	
	function deleteDb($user){
		$this -> sql = 'DELETE FROM xtf1_user WHERE username = "'.$user.'"';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}
}
