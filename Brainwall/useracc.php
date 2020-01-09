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
	$update = false;
	$delete = false;
	$back = false;

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
			$update = true;
			
			$db = new Db($dbms, $host, $port, $dbname, $uname, $pword);
			$sel = $db->selectDb('*', 'WHERE username="' . $_COOKIE['Remember'] . '"');
	
			
			$profileid = $sel[0]['userid'] ;
			$height = htmlspecialchars($_POST['accheight']) ;
			$apeindex = htmlspecialchars($_POST['accapeindex']);
			$climbingscore = htmlspecialchars($_POST['accclimbingscore']);
			$username = htmlspecialchars($_COOKIE['Remember']);
			$pswd  = $_POST['accpswd'];			
		}
	}

// INSERT =========================================================================================

	if ( $insert ) {

		if ( password_verify($pswd, $sel[0]['password']) ) {
			
			$data = [$profileid, $apeindex, $height, $climbingscore, $profileid];
			// var_dump($data);

			$db->insertProfileDb($data);

			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
			
		} else {
			
			$back = true;
			
			$_SESSION['form'] = 'accform';
			$_SESSION['errormsg']['accpswd'] = 'Falsches Passwort!';
			$_SESSION['formfield']['accpswd'] = 'accpswd';
		}
	}

// UPDATE =========================================================================================

	if ( $update ) {

		if ( password_verify($pswd, $sel[0]['password']) ) {
			
			$db->updateProfileDb('height', $height, $profileid);
			$db->updateProfileDb('apeindex', $apeindex, $profileid);
			$db->updateProfileDb('climbingscore', $climbingscore, $profileid);

			header('Location: ' . $_SERVER['HTTP_REFERER']);
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
