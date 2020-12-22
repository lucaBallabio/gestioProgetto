<?php
	session_start();
	include 'connection.php';
	$User=$_POST["user"];
	$Nome= $_POST["Nome"];
	$prezzo=$_POST["prezzo"];
	$genere=$_POST["genere"];

	$query="SELECT quantità,Nome FROM prodotti WHERE Nome = '$Nome' AND IdUtente = '$User' ";
	$alfa = $conn->query($query);
	if ($alfa->num_rows > 0) {
		while($row = $alfa->fetch_assoc()){
			$totale=$row['quantità']+1;
			if($conn->query("UPDATE prodotti SET quantità='$totale'  WHERE Nome = '$Nome' AND IdUtente = '$User'")=== true)
				{echo'modifica fatta';
					break;
				}
		}
	}else
	{
			$values = "'".$Nome."','".$prezzo."','".$genere."','".$User."','1'";
			$sql = "INSERT INTO prodotti (Nome, prezzo, genere,IdUtente,quantità) VALUES (".$values.")";
			$result = $conn->query($sql);
			echo $User;
			//echo $sql."<br>";
			if ($conn->affected_rows > 0) {
				echo "Inserito con successo<br>";
			//	header('location: cibo.php');
			} else {
				echo "Errore nell'inserimento!<br>";
				echo $conn->error;
			}
	}
	if($genere=="Caramelle"){
		header('location: Caramelle.php');

	}else if($genere=="cibo"){
		header('location: cibo.php');
	}else if($genere=="bevande"){
		header('location: bevande.php');
	}
	$conn->close();
?>
