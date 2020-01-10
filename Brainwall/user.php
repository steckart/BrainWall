<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['form'] = '';
$_SESSION['formfield'] = [];
$_SESSION['errormsg'] = [];

require('includes/dbparms.php');
require('classes/class.db.php');

$register = false;
$back = false;

if (!empty($_POST) ) {
	if (isset($_POST['rformname']) ) {
			$register = true;
			$username = htmlspecialchars($_POST['runame']);
			$email = htmlspecialchars($_POST['remail']);
			$password  = htmlspecialchars($_POST['rpswd']);
	} else {
			$username = htmlspecialchars($_POST['luname']);
			$password  = htmlspecialchars($_POST['lpswd']);
	}
}

if ($register) {

	$data = [$username, $email, password_hash($password, PASSWORD_DEFAULT)];
	$db = new Db($dbms, $host, $port, $dbname, $uname, $pword);

	$sel = $db->selectDb('email, username', 'WHERE email="' . $email. '" OR username="' . $username . '"');
	header ('Location: index.php');
	setcookie("Remember", $username);
	
	if (empty($sel)) {

		$db->insertDb($data);
		setcookie("Remember", $username);
				

	} else {

		$back = true;
		$_SESSION['form'] = 'registerform';

		foreach ($sel as $v) {
			if ($v['email'] == $email) {
				$_SESSION['errormsg']['remail'] = 'E-Mail vergeben.';
				$_SESSION['formfield']['remail'] = 'remail';
			}
			if ($v['username'] == $uname) {
				$_SESSION['errormsg']['runame'] = 'Benutzername vergeben.';
				$_SESSION['formfield']['runame'] = 'runame';
			}
		}
	}

} else { // Hier beginnt der Login-Teil.
	
		$db = new Db($dbms, $host, $port, $dbname, $uname, $pword);
		$sel = $db->selectDb('password', 'WHERE username="' . $username . '"');
		
		
		
		if (empty($sel)) {
			$back = true;
			$_SESSION['form'] = 'loginform';
			$_SESSION['errormsg']['luname'] = 'Falscher Benutzername!';
			$_SESSION['formfield']['luname'] = 'luname';
		} else {
			
			if ( password_verify($password, $sel[0]['password']) ) {
					header ('Location:login.php');
				
				if (isset($_POST['Remember'])){
						setcookie("Remember", $username, time()+3600);
						header ('Location:login.php');
				}
				else {
						setcookie("Remember", $username);
				}
			} else {
				$back = true;
				$_SESSION['form'] = 'loginform';
				$_SESSION['errormsg']['lpswd'] = 'Falsches Passwort!';
				$_SESSION['formfield']['lpswd'] = 'lpswd';
			}
		}
}
if ( $back ) {
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit;
}
