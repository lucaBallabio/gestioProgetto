<?php
session_start();
include 'connection.php';
if(!isset($_SESSION["username"])){
    header("Location: index.php?err=Devi effettuare il login!");
    die();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>BAR ROSSO</title>
    <link rel="stylesheet" type="text/css" href="stile2.css">
    
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

    </style>
    <meta charset="utf-8">
</head>

<body>
    <h1 class="titolo">Carrello</h1>
    <div class="menu">
        <ul>
        <li><a href="home.php">Home</a></li>
			<li><a href="Caramelle.php">Caramelle</a></li>
			<li><a href="cibo.php">Cibo</a></li>
			<li><a href="Bevande.php">Bevande</a></li>
			<li><a href="Carrello.php"><button>
				<img src="immagini/carrello.png" alt="carrello" style="width: 70px; height: 70px;"></button></a></li>
						
                    </div>
                </a></li>
        </ul>
    </div>
    <br>
    <div style="margin-left: 500px">
        <div class="column middle">
        <form method="POST" action="addOrdine.php">
            <h2>Ordine</h2>
            <div style="margin: 0 auto;">
            <?php echo "<input style='display: none' readonly type='text' name='user' value='".$_SESSION['username']."'>";?>
            <table class = "tabella" id="tabella">
                    <tr>
                        <th>Alimento</th>
                        <th>Costo</th>
                        <th>Quantità</th>
                      
                    </tr>
                    
                    <?php
                   

                                        
                    $totale=0;
                    $user=$_SESSION["username"];
                    $query="SELECT Nome,prezzo,quantità,id FROM prodotti WHERE IdUtente='$user'";
                    $alfa=$conn->query($query);
                    if ($alfa->num_rows > 0) {
                        $index=0;

                        while($row = $alfa->fetch_assoc()){
                           echo '<tr><td ><input type="text" name="Nome'.$index.'"  readonly value="' .$row['Nome'].'"></td>';
                           echo '<td ><input readonly type="number" name="prezzo'.$index.'"value="' .$row['prezzo'].'"></td>';
                           echo'<input style=\'display: none\' readonly type=\'text\' name=\'id\' value=\''.$row['id'].'\'>';   
                            $totale+=$row['prezzo']*$row['quantità'];
                           echo '<td><input type="number"  name="quantità'.$index.'" min= "0" value="'.$row['quantità'].'"></td>';
                         
                        $index++;
                        }
                        echo "<input style='display: none' readonly type='text' name='index' value='".$index."'>";
                    }
                    ?>  
                </table>
                   
            </div>
            <div style="scroll-margin-bottom: 30px;">
                <p>Classe : </p>
                <input name="classe" style="border-radius: 15px; height: 25px; width: 200px; text-align: center;">
                <p>Orario di consegna : </p>
                <div>
                    <select name="Orario" class="comboBox">
                      <?php
                      for( $i = 9;$i<17;$i++){
                        echo "<option value='".$i.":00'>".$i.":00</option>";
                        echo "<option value='".$i.":30'>".$i.":30</option>";
                    }
                      
                      ?>  
                    </select>
                </div>
            </div>
            <button class="buttonConferma" type="submit" name="ConfermaOrdine">Conferma Ordine</button>
            <button class="lol" type="submit" name="annullaOrdine">annulla Ordine</button>
           </form>
        </div>
           
</body>

</html>