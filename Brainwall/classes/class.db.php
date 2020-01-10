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
	function selectProfileDb($selection, $where){
		$this -> sql = 'SELECT ' . $selection . ' FROM xtf1_user AS user 
		LEFT JOIN xtf1_profile AS profile ON user.userid = profile.user
		LEFT JOIN xtf1_personaldata AS personal ON user.userid = personal.user
		' . $where;
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
		$this -> data = $this -> statement -> fetchAll();
		return $this -> data;
	}

// ================================================================================================	
	
	function insertDb($data) {
		$this -> sql = 'INSERT INTO xtf1_user (username, email, password) VALUES (?, ?, ?)';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute($data);
	}
	function insertProfileDb($data) {
		$this -> sql = 'INSERT INTO xtf1_profile (profileid, apeindex, height, climbingscore, user) VALUES (?, ?, ?, ?, ?)';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute($data);
	}
	function insertPersonalDb($data) {
		$this -> sql = 'INSERT INTO xtf1_personaldata (personalid, first_name, last_name, street, zip, location, birth_date, phone, user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute($data);
	}

// ================================================================================================	
	
	function updateDb($selection, $update, $user){
		$this -> sql = 'UPDATE xtf1_user SET ' . $selection . ' = "' . $update . '" WHERE username = "' . $user . '"' ;
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}
	function updateProfileDb($selection, $update, $user){
		$this -> sql = 'UPDATE xtf1_profile SET ' . $selection . ' = "' . $update . '" WHERE user = "' . $user . '"' ;
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}	
	function updatePersonalDb($selection, $update, $user){
		$this -> sql = 'UPDATE xtf1_personaldata SET ' . $selection . ' = "' . $update . '" WHERE user = "' . $user . '"' ;
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}

// ================================================================================================	
		
	function deleteDb($user){
		$this -> sql = 'DELETE FROM xtf1_user WHERE username = "'.$user.'"';
		$this -> statement = $this -> db -> prepare($this -> sql);
		$this -> statement -> execute();
	}
}
