<?php
	session_start();
    include 'connection.php';    
    if(isset($_POST['ConfermaOrdine']))
    {

    
    $User=$_POST["user"];
	$prezzoT=0;
	$orario=$_POST["Orario"];
    $classe=$_POST["classe"];
    $ordine="";
    $tot=$_POST["index"];
    for($i=0;$i<$tot;$i++){

        $ordine.=$_POST["Nome".$i].' '.$_POST["quantità".$i].'\n';
        $prezzoT+=$_POST["quantità".$i]*$_POST["prezzo".$i];
    }
    $query2="INSERT INTO  ordini (IdUtenti, ordine, orario,totale,classe) VALUES ('$User','$ordine','$orario','$prezzoT','$classe')";
    echo $query2;
    $alfa=$conn->query($query2);
    if ($conn->affected_rows > 0) {
        echo "Inserito con successo<br>";
        $sql = "DELETE FROM prodotti WHERE IdUtente='$User' ";

        if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        } else {
        echo "Error deleting record: " . $conn->error;
        }
        header('location: home.php');
    } else {
        echo "Errore nell'inserimento!<br>";
        echo $conn->error;
    }

    }else if(isset($_POST['annullaOrdine']))
    {  
        $User=$_POST["user"];
        $sql = "DELETE FROM prodotti WHERE IdUtente='$User' ";

        if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        } else {
        echo "Error deleting record: " . $conn->error;
        }
        header('location: home.php');


    }
    
    
    $conn->close();
    
    
    
    
?>