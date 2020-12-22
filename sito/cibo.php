<?php
session_start();
if(!isset($_SESSION["username"])){
	header("Location: index.php?err=Devi effettuare il login!");
	die();
}
else{
	$user=$_SESSION["username"];
}
?>
<head>
	<title>Cibo</title>
	<link rel="stylesheet" type="text/css" href="stile2.css">

	<script >
		 function aggiungiOrdini(Nome,prezzo,quantita){
			
	location.href = 'inserisci.php?Nome='+Nome+'?prezzo='+prezzo+'?quantita='+quantita;
			
			
		 }
	</script>

</head>

<body>
		<div>
			<h1 class="h1">Cibo</h1>
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
		<form enctype="multipart/form-data" action='inserisci.php' method='POST'>
			<div style="display:flex;">
				<div class="column middle_cibo">
					<div style="text-align: center">
						<a name="panzerotti">
							<h2 style="color:blue">Ingredienti panzerotti</h2>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='panzerotto'>
							<input style='display: none' readonly type='number' name='prezzo' value='2'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
									<h3>Panzerotto ( 2€ ) <button type="submit" style="margin-left: 10px;"><img src="immagini/piu.jpg" alt="piu"
											style="width: 20px; height: 20px;"></button>
									<p>
										- impasto del panzerotto<br>
										- mozzarella<br>
										- pomodoro<br>
										- prosciutto cotto<br>
									</p>
							</form>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='panzerottoWurstel'>
							<input style='display: none' readonly type='number' name='prezzo' value='1.50'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>panzerotto con wurstel ( 1,5€ )<button type="submit" style="margin-left: 10px;">
										<img src="immagini/piu.jpg"
										alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- impasto del panzerotto<br>
								- pomodoro<br>
								- mozzarella<br>
								- wurstel<br>
							</p>
							</form>

						</a>
					</div>
					<div style="text-align: center">
						<a name="panini">
							<h2 style="color:blue">Ingredienti panini</h2>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='PaninoCotoletta'>
							<input style='display: none' readonly type='number' name='prezzo' value='2'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>Panino con la cotoletta ( 2€ )<button style="margin-left: 10px;">
										<img src="immagini/piu.jpg"
										alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- pane con semi di semola<br>
								- cotoletta<br>
								- insalata<br>
								- salse (a scelta)<br>
							</p>
							</form>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='paninoWurstel'>
							<input style='display: none' readonly type='number' name='prezzo' value='2'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>panino ai wurstel ( 2€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg"
										alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- pane con semi di semola<br>
								- wurstel<br>
								- salse (a scelta)<br>
							</p>
							</form>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='paninoPomodoroMozzarellaInsalata'>
							<input style='display: none' readonly type='number' name='prezzo' value='2'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>panino pomodoro,mozzarella,insalata ( 2€ )<button style="margin-left: 10px;"><img
										src="immagini/piu.jpg" alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- pane con semi di semola<br>
								- pomodoro<br>
								- mozzarella<br>
								- insalata<br>
								- salse (a scelta)<br>
							</p>
							</form>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='paninoSalame'>
							<input style='display: none' readonly type='number' name='prezzo' value='2'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>panino al salame ( 2€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg"
										alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- pane con semi di semola<br>
								- salame<br>
								- insalata<br>
								- salse (a scelta)<br>
							</p>
							</form>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='paninoBresaolaRucola'>
							<input style='display: none' readonly type='number' name='prezzo' value='2.50'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>panino bresaola e rucola ( 2,5€ )<button style="margin-left: 10px;"><img
										src="immagini/piu.jpg" alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- pane con semi di semola<br>
								- bresaola<br>
								- rucola<br>
								- salse (a scelta)<br>
							</p>
							</form>
						</a>
					</div>
					<div style="text-align: center">
						<a name="pizze">
							<h2 style="color:blue">Pizze</h2>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='pizzaMargherita'>
							<input style='display: none' readonly type='number' name='prezzo' value='1'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>Pizza margherita ( al piatto 3€ /al trancio 1€ )<button style="margin-left: 10px;"><img
										src="immagini/piu.jpg" alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- impasto della pizza<br>
								- mozzarella<br>
								- pomodoro<br>
							</p>
							</form>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='pizzaFarcita'>
							<input style='display: none' readonly type='number' name='prezzo' value='3.50'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>Pizza farcita ( al piatto 3,5€ )<button style="margin-left: 10px;"><img
										src="immagini/piu.jpg" alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- impasto della pizza<br>
								- mozzarella<br>
								- pomodoro<br>
								- ingredienti (a scelta) <br>
							</p>
							</form>
						</a>
					</div>
					<div style="text-align: center">
						<a name="focacce">
							<h2 style="color:blue">Focacce</h2>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='focacciaLiscia'>
							<input style='display: none' readonly type='number' name='prezzo' value='1'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>Focaccia liscia ( 1€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg"
										alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- impasto della focaccia<br>
							</p>
							</form>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='focacciaBresaolaRucola'>
							<input style='display: none' readonly type='number' name='prezzo' value='2.50'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>Focaccia Bresaola e rucola ( 2,5€ )<button style="margin-left: 10px;"><img
										src="immagini/piu.jpg" alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- impasto della focaccia<br>
								- bresaola<br>
								- rucola<br>
							</p>
							</form>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='focacciaCrudo'>
							<input style='display: none' readonly type='number' name='prezzo' value='2.50'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>Focaccia crudo ( 2,5€ )<button style="margin-left: 10px;"><img src="immagini/piu.jpg"
										alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- impasto della focaccia<br>
								- crudo<br>
							</p>
							</form>
							<form method='Post' action='inserisci.php'>
							<input style='display: none' readonly type='text' name='user' value= '<?php echo $user?>'>
							<input style='display: none' readonly type='text' name='Nome' value='facacciaCrudoFontina'>
							<input style='display: none' readonly type='number' name='prezzo' value='2.50'>
							<input style='display: none' readonly type='text' name='genere' value='cibo'>
							<h3>Focaccia crudo e fontina ( 2,5€ )<button style="margin-left: 10px;"><img
										src="immagini/piu.jpg" alt="piu" style="width: 20px; height: 20px;"></button></h3>
							<p>
								- impasto della focaccia<br>
								- crudo<br>
								- fontina<br>
							</p>
							</form>
						</a>
					</div>
				</div>
				<div class="immaginiIllustrative">
					<div class="desc1"><b>Panzerotti</b></div>
					<img src="immagini/panzerotti.jpg" alt="panzerotti" style="height: 180px; width: 400px;">
					<img src="immagini/panzerottoWurstel.jpg" alt="panzerotti" style="height: 180px; width: 400px;">

					<div class="desc1"><b>Panini</b></div>
					<img src="immagini/panini.jpg" alt="caramelle" style="height: 180px; width: 400px;">
					<img src="immagini/paninoWurstel.jpg" alt="caramelle" style="height: 180px; width: 400px;">
					<img src="immagini/paninoMozzarella.jpg" alt="caramelle" style="height: 180px; width: 400px;">
					<img src="immagini/paninoSalame.jpg" alt="caramelle" style="height: 180px; width: 400px;">
					<img src="immagini/paninoBresaola.jpg" alt="caramelle" style="height: 180px; width: 400px;">

					<div class="desc1"><b>Pizze</b></div>
					<img src="immagini/pizza.jpg" alt="bibite" style="height: 180px; width: 400px;">
					<img src="immagini/pizzaFarcita.jpg" alt="bibite" style="height: 180px; width: 400px;">

					<div class="desc1"><b>Focacce</b></div>
					<img src="immagini/focacce.jpg" alt="bibite" style="height: 180px; width: 400px;">
					<img src="immagini/focacciaBresaola.jpg" alt="bibite" style="height: 180px; width: 400px;">
					<img src="immagini/focacciaCrudo.jpg" alt="bibite" style="height: 180px; width: 400px;">
					<img src="immagini/facacciaFontina.jpg" alt="bibite" style="height: 180px; width: 400px;">
				</div>
			</div>
			</div>
			</form>
</body>

</html>