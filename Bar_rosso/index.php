<?php
session_start();
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="stile.css">
</head>

<body>


<form action ="chkLogin.php" method="post">
	<h1 style="text-align: center"> Username:</h1>
	<input type="text" name="username" style="text-align: center" value="<?php if(isset($_GET["oldEmail"]))echo $_GET["oldEmail"];?>">
	<br>
	
	<h1 style="text-align: center">Password:</h1>
	<input type="password" name="password"  style="text-align: center" value="<?php if(isset($_GET["oldPassword"]))echo $_GET["oldPassword"];?>">
	<br>
	
	
	<?php if(isset($_GET["err"]))
		echo "<h1 class='rosso'>Status: </h1><p>".$_GET["err"]."</p><br>";
	?>
	
	<br>
	<input type="submit" value="Login" style="text-align: center" >
	<input type="reset" value="Cancella" style="text-align: center">
	<br><br>
	<h1 style="text-align: center">Per registrarsi cliccare <a href="registrati.php">qui</a></h1><br>

</form>
<?php


?>

</body>

</html>