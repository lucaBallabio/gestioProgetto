<?php
session_start();
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="stile.css">

<script>
function chkUserAndPass(){
	var user = document.getElementById("user").value;
	var pass = document.getElementById("pass").value;
	var passR = document.getElementById("passR").value;
	regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
	if(pass!=passR){
		window.location="registrati.php?err=[JS]Le password non corrispondono.";
		return false;
	}
	if (regex.exec(pass) == null) 
	{
		window.location="registrati.php?err=[JS]Password inserita non soddisfa i requisiti di sicurezza<br>-minimo 8 caratteri<br>-una lettera grande e una piccola<br>-un numero";
		return false;
	}else{
		return true;
	}

}

</script>
</head>

<body>

<!--SI POTREBBE USARE L'EVENTO ON SUBMIT SUL FORM. SE RETURN TRUE IL FORM EFFETTUA
IL SUBMIT ALTRIMENTI SE FALSE NO-->
<form action ="registrazioneEsegui.php" method="post" onsubmit="chkUserAndPass()">
	<h1>Registrazione Account</h1><br><br>
	<h1>Nuovo username:</h1>
	<input type="text" name="username" id="user" value="<?php if(isset($_GET["oldEmail"]))echo $_GET["oldEmail"];?>">
	<br>
	
	<h1>Nuova password:</h1>
	<input type="password" name="password" id="pass" value="<?php if(isset($_GET["oldPassword"]))echo $_GET["oldPassword"];?>">
	<br>
	<h1>Reinserisci password:</h1>
	<input type="password" id="passR">
	<br>
	
	<?php if(isset($_GET["err"]))
		echo "<h1 class='rosso'>Status: </h1><p>".$_GET["err"]."</p><br>";
	?>
	
	<br>
	<input type="submit" value="Registrati">
	<input type="reset" value="Cancella">
	<br><br>

</form>
<?php


?>

</body>

</html>