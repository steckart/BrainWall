<?php

// SESSION-START =================================================================================

	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	$_SESSION['form'] = '';
	$_SESSION['formfield'] = [];
	$_SESSION['errormsg'] = [];

// REQUIRE + DB-CONNECT & SELECT =======================================================================================

	require('includes/dbparms.php');
	require('classes/class.db.php');

	
// $_POST =========================================================================================

	$insert = false;
	$profile = false;
	$delete = false;
	$back = false;
	$personalinsert = false;
	$personalupdate = false;

	if ( !empty($_POST) ) {
		if ( isset($_POST['accforminsert']) ) {
			$insert = true;
			
			$db = new Db($dbms, $host, $port, $dbname, $uname, $pword);
			$sel = $db->selectDb('*', 'WHERE username="' . $_COOKIE['Remember'] . '"');
	
			$profileid = $sel[0]['userid'] ;
			$height = htmlspecialchars($_POST['accheight']) ;
			$apeindex = htmlspecialchars($_POST['accapeindex']);
			$climbingscore = htmlspecialchars($_POST['accclimbingscore']);
			$username = htmlspecialchars($_COOKIE['Remember']);
			$pswd  = $_POST['accpswd'];			
		}
		if ( isset($_POST['accformupdate']) ) {
			$profile = true;
			
			$db = new Db($dbms, $host, $port, $dbname, $uname, $pword);
			$sel = $db->selectProfileDb('*', 'WHERE username="' . $_COOKIE['Remember'] . '"');
	
			$profileid = $sel[0]['userid'] ;
			$height = htmlspecialchars($_POST['accheight']) ;
			$apeindex = htmlspecialchars($_POST['accapeindex']);
			$climbingscore = htmlspecialchars($_POST['accclimbingscore']);
			$username = htmlspecialchars($_COOKIE['Remember']);
			$email = htmlspecialchars($_POST['accemail']);
			$pswd  = $_POST['accpswd'];			
		}
		if ( isset($_POST['personalinsert']) ) {
			$personalinsert = true;
			
			$db = new Db($dbms, $host, $port, $dbname, $uname, $pword);
			$sel = $db->selectProfileDb('*', 'WHERE username="' . $_COOKIE['Remember'] . '"');
	
			$personalid = $sel[0]['userid'] ;
			$fname = htmlspecialchars($_POST['accfname']) ;
			$lname = htmlspecialchars($_POST['acclname']) ;
			$address = htmlspecialchars($_POST['accaddress']) ;
			$zip = htmlspecialchars($_POST['acczip']) ;
			$location = htmlspecialchars($_POST['acclocation']) ;
			$phone = htmlspecialchars($_POST['accphone']) ;
			$bday = date('Y-m-d', strtotime($_POST['accbday'])) ;
			$username = htmlspecialchars($_COOKIE['Remember']);
			$pswd  = $_POST['accpswd'];			
		}
		if ( isset($_POST['personalupdate']) ) {
			$personalupdate = true;
			
			$db = new Db($dbms, $host, $port, $dbname, $uname, $pword);
			$sel = $db->selectProfileDb('*', 'WHERE username="' . $_COOKIE['Remember'] . '"');
	
			$personalid = $sel[0]['userid'] ;
			$fname = htmlspecialchars($_POST['accfname']) ;
			$lname = htmlspecialchars($_POST['acclname']) ;
			$address = htmlspecialchars($_POST['accaddress']) ;
			$zip = htmlspecialchars($_POST['acczip']) ;
			$location = htmlspecialchars($_POST['acclocation']) ;
			$phone = htmlspecialchars($_POST['accphone']) ;
			$bday = date('Y-m-d', strtotime($_POST['accbday'])) ;
			$username = htmlspecialchars($_COOKIE['Remember']);
			$pswd  = $_POST['accpswd'];			
		}
	}

// PROFILE-INSERT =========================================================================================

	if ( $insert ) {

		if ( password_verify($pswd, $sel[0]['password']) ) {
			
			$data = [$profileid, $apeindex, $height, $climbingscore, $profileid];
			// var_dump($data);

			$db->insertProfileDb($data);

			header('Location: profile.php?s=profile');
			exit;
			
		} else {
			
			$back = true;
			
			$_SESSION['form'] = 'accform';
			$_SESSION['errormsg']['accpswd'] = 'Falsches Passwort!';
			$_SESSION['formfield']['accpswd'] = 'accpswd';
		}
	}

// PROFILE-UPDATE =========================================================================================

	if ( $profile ) {

		if ( password_verify($pswd, $sel[0]['password']) ) {
			
			$db->updateProfileDb('height', $height, $profileid);
			$db->updateProfileDb('apeindex', $apeindex, $profileid);
			$db->updateProfileDb('climbingscore', $climbingscore, $profileid);
			$db->updateDb('email', $email, $username);

			header('Location: profile.php?s=profile');
			exit;
			
		} else {
			
			$back = true;
			
			$_SESSION['form'] = 'accform';
			$_SESSION['errormsg']['accpswd'] = 'Falsches Passwort!';
			$_SESSION['formfield']['accpswd'] = 'accpswd';
		}
	}
	
// PERSONAL DATA-INSERT =========================================================================================

	if ( $personalinsert ) {

		if ( password_verify($pswd, $sel[0]['password']) ) {
			
			$data = [$personalid, $fname, $lname, $address, $zip, $location, $bday, $phone, $personalid];
			$db->insertPersonalDb($data);

			header('Location: profile.php?s=personaldata');
			exit;
			
		} else {
			
			$back = true;
			
			$_SESSION['form'] = 'accform';
			$_SESSION['errormsg']['accpswd'] = 'Falsches Passwort!';
			$_SESSION['formfield']['accpswd'] = 'accpswd';
		}
	}	
// PERSONAL DATA-UPDATE =========================================================================================

	if ( $personalupdate ) {

		if ( password_verify($pswd, $sel[0]['password']) ) {
			
			$db->updatePersonalDb('first_name', $fname, $personalid);
			$db->updatePersonalDb('last_name', $lname, $personalid);
			$db->updatePersonalDb('street', $address, $personalid);
			$db->updatePersonalDb('zip', $zip, $personalid);
			$db->updatePersonalDb('location', $location, $personalid);
			$db->updatePersonalDb('phone', $phone, $personalid);
			$db->updatePersonalDb('birth_date', $bday, $personalid);

			header('Location: profile.php?s=personaldata');
			exit;
			
		} else {
			
			$back = true;
			
			$_SESSION['form'] = 'accform';
			$_SESSION['errormsg']['accpswd'] = 'Falsches Passwort!';
			$_SESSION['formfield']['accpswd'] = 'accpswd';
		}
	}

// DELETE =========================================================================================

	if ( $delete ) {
		
		$db = new Db($dbms, $host, $port, $dbname, $uname, $pword);
		$sel = $db->selectDb('uid, pswd', 'WHERE uname="' . $username . '"');

		if ( password_verify($pswd, $sel[0]['pswd']) ) {
			
			
			$db->deleteDbBlog($sel[0]['uid']);
			$db->deleteDb($uname);
			setcookie('uname', '', time()-3600);
			setcookie('PHPSESSID', '', time()-3600, '/');
			header('Location: index.php');
			exit;
		} else {
			$back = true;
			$_SESSION['form'] = 'delform';
			$_SESSION['errormsg']['delpswd'] = 'Wrong password!';
			$_SESSION['formfield']['delpswd'] = 'delpswd';
		}
	}

// FORWARDING =======================================================================================

	if ( $back ) {	
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}
