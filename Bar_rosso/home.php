<?php
session_start();
if(!isset($_SESSION["username"])){
	header("Location: index.php?err=Devi effettuare il login!");
	die();
}
?>
<html>

<head>
<title>BAR ROSSO</title>
	<link rel="stylesheet" type="text/css" href="stile2.css">

</head>

<body>
<body>
	<h1 class="titolo">BAR ROSSO</h1>
	<div class="menu">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="Caramelle.php">Caramelle</a></li>
			<li><a href="cibo.php">Cibo</a></li>
			<li><a href="Bevande.php">Bevande</a></li>
			<li><a href="Carrello.php"><button>
				<img src="immagini/carrello.png" alt="carrello" style="width: 70px; height: 70px;"></button>
			</div></a></li>
		</ul>
	</div>
	<br>
	<div class="row">
		<div class="column side">
			<h2>Contenuti</h2>
			<ol>
				<a href="#panzertti">
					<li>panzerotti</li>
				</a>
				<br>
				<a href="#panini">
					<li>panini</li>
				</a>
				<br>
				<a href="#pizze">
					<li>pizze</li>
				</a>
				<br>
				<a href="#focacce">
					<li>focacce</li>
				</a>
				<br>
			</ol>
		</div>
		<div class="column middle">
			<div style="text-align: center">
				<a name="panzerotti">
					<h2 style="color:blue">Panzerotti</h2>
					<h3>Panzerotto da 2€</h3>
					<h3>panzerotto da 1,5€</h3>
				</a>
			</div>
			<div style="text-align: center">
				<a name="panini">
					<h2 style="color:blue">Panini</h2>
					<h3>Panino con la cotoletta</h3>
					<h3>panino ai wurstel</h3>
					<h3>panino pomodoro,mozzarella,insalata</h3>
					<h3>panino al salame</h3>
					<h3>panino bresaola e rucola</h3>
				</a>
			</div>
			<div style="text-align: center">
				<a name="pizze">
					<h2 style="color:blue">Pizze</h2>
					<h3>Pizza margherita ( al piatto/al trancio )</h3>
					<h3>Pizza farcita ( al piatto )</h3>
				</a>
			</div>
			<div style="text-align: center">
				<a name="focacce">
					<h2 style="color:blue">Focacce</h2>
					<h3>Focaccia liscia</h3>
					<h3>Focaccia Bresaola e rucola</h3>
					<h3>Focaccia crudo</h3>
					<h3>Focaccia crudo e fontina</h3>
				</a>
			</div>
		</div>
		<div class="column side">
			<h2>alimenti e bevande</h2>
			<div class="img">
				<img src="immagini/panzerotti.jpg" alt="panzerotti">
				<div class="desc">Panzerotti</div>
			</div>
			<div class="img">
				<img src="immagini/caramelle.jpg" alt="caramelle">
				<div class="desc">Caramelle</div>
			</div>
			<div class="img">
				<img src="immagini/bibite.jpg" alt="bibite">
				<div class="desc">Bibite</div>
			</div>
		</div>
	</div>
</body>
</html>