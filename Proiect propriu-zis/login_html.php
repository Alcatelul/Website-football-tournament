<!DOCTYPE html>
<html>
<head><!--Imagine de fundal si pozitii-->
<style>
body {
	background-image: url("stadion.jpg");
	background-size:cover;
}
pozitie1 {
	position: fixed;
	left: 600px;
	top: 300px;
	}
pozitie_titlu {
	position: fixed;
	left: 550px;
	top: 20px;

</style>
</head>
<head> 
	<title>CM 2018</title>	<!--Titlu la pagini deschise in browser-->
	
</head>	
<body > 
	<poztie_titlu><!--Stil text-->
		<div align="center" style="color:BLACK;font-size:70px;font-family: arial;">
		LOGIN 
		</div>
	</pozitie_titlu>
	<pozitie1><!--Formular pentru trimitere date admin-->
		<form method="post" action="login_php.php">
			<font color="black">User:</font><br>
			<input type="text" name="user"><br>
			<font color="black">Parola:</font><br>
			<input type="password" name="parola"><br>
			<input type="submit" value="Logare">
		</form>
	</pozitie1>	
</body>
</html>