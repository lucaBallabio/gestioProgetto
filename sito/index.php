<?php
session_start();
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body>

<form action ="chkLogin.php" method="post">
	<h1 class="nanni">Accedi</h1>
	<h1 class="fabbia">Accedi con le tue credenziali per effettuare l'ordine</h1>
	<h1 class="lubballa"> Username:</h1>
	<input type="text" name="username" value="<?php if(isset($_GET["oldEmail"]))echo $_GET["oldEmail"];?>">
	<br>
	
	<h1 class="lubballa">Password:</h1>
	<input type="password" name="password" value="<?php if(isset($_GET["oldPassword"]))echo $_GET["oldPassword"];?>">
	<br>
	
	
	<?php if(isset($_GET["err"]))
		echo "<h1 class='rosso'>Status: </h1><p>".$_GET["err"]."</p><br>";
	?>
	
	<br>
	<input type="submit" value="Login">
	<input type="reset" value="Cancella">
	<br><br>
	<h1>Per registrarsi cliccare <a href="registrati.php">qui</a></h1><br>

</form>
<?php


?>

</body>

</html>