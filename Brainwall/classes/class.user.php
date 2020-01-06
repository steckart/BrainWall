<?php
class User {

	
	private $email;
	private $username;
	private $password;

	function __construct($username, $email, $password) {
		$this -> username = $username;
		$this -> email = $email;
		$this -> password = $password;
	}
	function setUserName($username) {
		$this -> username = $username;
	}
	
	function setEMail($email) {
		$this -> email = $email;
	}
	
	function setPassword($password) {
		$this -> password = $password;
	}
	
	function getUserName() {
		return $this -> username;
	}
	
	function getEMail() {
		return $this -> email;
	}
	
	function getPassword($password) {
		return $this -> password;
	}

}