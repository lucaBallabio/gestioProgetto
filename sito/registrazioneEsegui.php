<?php
	session_start();
	include 'connection.php';
	$user = trim($_POST['username']);
	$pass = $_POST['password'];
	
	chkUserPass($user,$pass);
	
	$stmt = $conn->prepare("INSERT INTO utenti (username,password) VALUES(?,?)");
	$stmt->bind_param("ss", $user, $pass);
	
	//Parametri già settati
	$pass = md5($_POST['password']);
	$result = $stmt->execute();

	if($result==TRUE){
		echo "Registrazione effettuata con successo! Click <a href='index.php'>here</a> for login";
	}else{
		header('Location: registrati.php?err=Username già esistente');
	}
	
	$conn->close();
	
	
	function chkUserPass($user,$pass){
		if(strlen($pass)<8){
			header('Location: registrati.php?err=La password deve avere almeno 8 caratteri');
			die();
		}
		if(strtolower($pass) == $pass) {
			header('Location: registrati.php?err=La password deve contenere almeno una lettera maiuscola');
			die();
		}
		if(strlen($user)<=4){
			header("Location: registrati.php?err=L'username deve avere una lunghezza di almeno 4 caratteri");
			die();
		}
	}
?>


