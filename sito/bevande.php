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
					</div>
				</a></li>
		</ul>
	</div>
	<div style="display:flex;">
		<div class="column middle_bevande">
			<div style="text-align: center">
				<a name="Bibite">
					<h2 style="color:blue">Bibite in bottiglia</h2>
					<form method='Post' action='inserisci.php'>
					<input style='display: none' readonly type='text' name='user' value= '<?php echo $_SESSION['username']?>'>
					<input style='display: none' readonly type='text' name='Nome' value='acquaNaturale'>
					<input style='display: none' readonly type='number' name='prezzo' value='0.50'>
					<input style='display: none' readonly type='text' name='genere' value='bevande'>
					<h3>Acqua Naturale ( 0,5€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg" alt="piu"
								style="width: 20px; height: 20px;"></button></h3>
					</form>
					<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $_SESSION['username']?>'>
							<input style='display: none' readonly type='text' name='Nome' value='acquaFrizzante'>
							<input style='display: none' readonly type='number' name='prezzo' value='0.80'>
							<input style='display: none' readonly type='text' name='genere' value='bevande'>
					<h3>Acqua Frizzante ( 0,8€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg" alt="piu"
								style="width: 20px; height: 20px;"></button></h3>
					</form>
					<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $_SESSION['username']?>'>
							<input style='display: none' readonly type='text' name='Nome' value='Getorade'>
							<input style='display: none' readonly type='number' name='prezzo' value='1.50'>
							<input style='display: none' readonly type='text' name='genere' value='bevande'>
					<h3>Gatorade ( 1,5€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg" alt="piu"
								style="width: 20px; height: 20px;"></button></h3>
					</form>
					<img src="immagini/AcquaNat.jpg" alt="Bibite" style="height: 300px; width: 300px;">
					<img src="immagini/Frizzante.jpg" alt="Bibite" style="height: 300px; width: 300px;">
					<img src="immagini/Gatorade.jpg" alt="Bibite" style="height: 300px; width: 300px;">
				</a>
			</div>
			<div style="text-align: center">
				<a name="panini">
					<h2 style="color:blue">Bibite in lattina</h2>
					<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $_SESSION['username']?>'>
							<input style='display: none' readonly type='text' name='Nome' value='cocaCola'>
							<input style='display: none' readonly type='number' name='prezzo' value='1'>
							<input style='display: none' readonly type='text' name='genere' value='bevande'>
					<h3>Coca Cola ( 1€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg" alt="piu"
								style="width: 20px; height: 20px;"></button></h3>
								</form>
					<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $_SESSION['username']?>'>
							<input style='display: none' readonly type='text' name='Nome' value='Sprite'>
							<input style='display: none' readonly type='number' name='prezzo' value='1'>
							<input style='display: none' readonly type='text' name='genere' value='bevande'>
					<h3>Sprite ( 1€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg" alt="piu"
								style="width: 20px; height: 20px;"></button></h3>
					</form>
					<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $_SESSION['username']?>'>
							<input style='display: none' readonly type='text' name='Nome' value='redBull'>
							<input style='display: none' readonly type='number' name='prezzo' value='2'>
							<input style='display: none' readonly type='text' name='genere' value='bevande'>
					<h3>Red Bull ( 2€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg" alt="piu"
								style="width: 20px; height: 20px;"></button></h3>
					</form>
					<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $_SESSION['username']?>'>
							<input style='display: none' readonly type='text' name='Nome' value='Fanta'>
							<input style='display: none' readonly type='number' name='prezzo' value='1'>
							<input style='display: none' readonly type='text' name='genere' value='bevande'>
					<h3>Fanta ( 1€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg" alt="piu"
								style="width: 20px; height: 20px;"></button></h3>
					</form>
					<div>
						<img src="immagini/Coca.jpg" alt="Bibite" style="height: 300px; width: 300px;">
						<img src="immagini/Sprite.jpg" alt="Bibite" style="height: 300px; width: 300px;">
					</div>
					<div>
						<img src="immagini/RedBull.jpg" alt="Bibite" style="height: 300px; width: 300px;">
						<img src="immagini/Fanta.jpg" alt="Bibite" style="height: 300px; width: 300px;">
					</div>
				</a>
			</div>
		</div>
	</div>
</body>

</html>