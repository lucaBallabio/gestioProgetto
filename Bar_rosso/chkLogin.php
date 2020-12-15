<?php
	session_start();
	include 'connection.php';

	$sql = "SELECT * FROM utenti where username='".$_POST['username']."' AND password='".md5($_POST['password'])."'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	
	if ($result->num_rows > 0) {
		$_SESSION["username"]=$_POST['username'];
		if($row["admin"]==1){
			$_SESSION["admin"]=1;
			header('Location: capo.php');
		}
		else{
		echo $_SESSION["username"];
		header('Location: home.php?');


		}
	} else {
	header('Location: index.php?err=Credenziali errate!&oldEmail='.$_POST['username']);
	}
	$conn->close();
	
?>
