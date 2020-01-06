<?php
require("../includes/dbparms.php");
require('../classes/class.db.php');
	$db = new Db($dbms, $host, $port, $dbname, $username, $password);
	$seluname = $db->selectDb('uname', 'WHERE uname="'.$_COOKIE["Remember"].'"');
	
  
$upprof = false;
	
if (!empty($_POST) ) {
	if (isset($_POST['pformname']) ) {
			$upprof = true;
			$fname = htmlspecialchars($_POST['pfname']);
			$lname = htmlspecialchars($_POST['plname']);
			$email = htmlspecialchars($_POST['pemail']);
			$uname = htmlspecialchars($_COOKIE['Remember']);
	} 
}

 if($upprof) {
	$db->updateDb('uname', $uname, $uname);
	$db->updateDb('fname', $fname, $uname);
	$db->updateDb('lname', $lname, $uname);
  $db->updateDb('email', $email, $uname);
	header('Location: ../profil.php');
 }



