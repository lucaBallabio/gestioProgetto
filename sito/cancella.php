<?php
	session_start();
	
	if(!isset($_SESSION["admin"])){
		header("Location: index.php?err=Operazioni eseguibile solo da Administrator!!");
		die();
	}

	include 'connection.php';
	
	$Id=$_POST['user'];
	$sql = "DELETE FROM ordini WHERE id='$Id'";
	$result = $conn->query($sql);
	
	if ($conn->affected_rows > 0) {
		echo "Cancellato con successo!<br>";
		header("Location: capo.php");
	} else {
		echo "Impossibile cancellare il film selezionato!<br>";
		echo "<a href='capo.php'>Home</a>";
	}
	$conn->close();
	
?>
