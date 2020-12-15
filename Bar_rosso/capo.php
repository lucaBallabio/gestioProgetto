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
    <script >  </script>
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
    
    <br>
    <div style="margin-left: 500px">
        <div class="column middle">
       
            <h2>Ordini</h2>
            <div style="margin: 0 auto;">
            <?php echo "<input style='display: none' readonly type='text' name='user' value='".$_SESSION['username']."'>";?>
            
            <table class = "tabella" id="tabella">
                    <tr>
                        <th>Nome della persona</th>
                        <th>ordine</th>
                        <th>classe</th>
                        <th>orario</th>
                        <th>totale</th>
                    </tr>
                    
                    <?php
                    $query="SELECT IdUtenti,ordine,orario,totale,Classe,id FROM ordini ORDER BY  orario DESC";
                    $alfa=$conn->query($query);
                    if ($alfa->num_rows > 0) {
                        while($row = $alfa->fetch_assoc()){
                           echo '<tr><form method="POST" action="cancella.php"><input style=\'display: none\' readonly type=\'text\' name=\'user\' value=\''.$row['id'].'\'>';
                           echo '<td>' .$row['IdUtenti'].'</td>';
                           echo '<td>' .$row['Classe'].'</td>'; 
                           echo '<td>' .$row['orario'].'</td>';   
                           echo '<td>' .$row['ordine'].'</td>'; 
                           echo '<td>' .$row['totale'].'</td>';
                           echo '<td> <button type="submit"> Ordine pronto</button></td></form>  </tr>';
                        }
                    }
                    ?>  
                </table>
                 
            </div>
           
        </div>
       
</body>
</html>