<?php
session_start();
if(!isset($_SESSION["username"])){
	header("Location: index.php?err=Devi effettuare il login!");
	die();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bevande</title>
		<link rel="stylesheet" type="text/css"  href="stile2.css">
		<script src="js.js"></script>
	</head>
	<body>
		<div>
			<h1 class="h1">Bevande</h1>
           
		</div>
		<div class="menu">
			<ul>
            <li><a href="home.php">Home</a></li>
			<li><a href="Caramelle.php">Caramelle</a></li>
			<li><a href="cibo.php">Cibo</a></li>
			<li><a href="Bevande.php">Bevande</a></li>
			<li><a href="Carrello.php"><button>
				<img src="immagini/carrello.png" alt="carrello" style="width: 70px; height: 70px;"></button></a></li>
					</div></a></li>
			</ul>
		</div>
		<div style="display:flex;">
			<div class="column middle_bevande">
				<div style="text-align: center">
					<a name="Bibite">
						<h2 style="color:blue">Caramelle</h2>
						<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $_SESSION['username']?>'>
							<input style='display: none' readonly type='text' name='Nome' value='Goleador'>
							<input style='display: none' readonly type='number' name='prezzo' value='0.10'>
							<input style='display: none' readonly type='text' name='genere' value='Caramelle'>
							<h3>Goleador ( 0,1€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg" alt="piu" style="width: 20px; height: 20px;"></button>	</h3>
						</form>
						<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $_SESSION['username']?>'>
							<input style='display: none' readonly type='text' name='Nome' value='Frizzipazzi'>
							<input style='display: none' readonly type='number' name='prezzo' value='0.20'>
							<input style='display: none' readonly type='text' name='genere' value='Caramelle'>	
							<h3>Frizzi pazzi ( 0,2€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg" alt="piu" style="width: 20px; height: 20px;"></button></h3>
						</form>
						<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $_SESSION['username']?>'>
							<input style='display: none' readonly type='text' name='Nome' value='chewingum'>
							<input style='display: none' readonly type='number' name='prezzo' value='0.10'>
							<input style='display: none' readonly type='text' name='genere' value='Caramelle'>
							<h3>chewingum ( 0,1€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg" alt="piu" style="width: 20px; height: 20px;"></button></h3>	
						</form>				
					</a>
				</div>	
			<div class="immaginiIllustrative">			
				<div class="desc1"><b>Bibite in Bottiglia</b></div>
				<img src="immagini/goleador.jpg" alt="caramellecaramelle" style="height: 300px; width: 300px;">
				<img src="immagini/frizzi.jpg" alt="caramelle" style="height: 300px; width: 300px;">
				<img src="immagini/gomme.jpeg" alt="caramelle" style="height: 300px; width: 300px;">
			</div>
		</div>
		</div>
	</body>
</html>