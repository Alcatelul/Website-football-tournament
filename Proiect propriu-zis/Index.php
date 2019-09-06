<!DOCTYPE html>
<html>
<head><!--Setare imagine pentru fundal,pozitii in pagina si stil pentru buton-->
<style>

body {
	background-image: url("cupa2018.jpg");
	background-size:cover;
}
pozitie1 {
	position: fixed;
	left: 600px;
	top: 300px;
	}
pozitie_scris1 {
	position: fixed;
	left: 550px;
	top: 250px;
}

pozitie_scris2 {
	position: fixed;
	left: 532px;
	top: 300px;
}
.buton {
			background: blue;
			background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
			background-image: -moz-linear-gradient(top, #3498db, #2980b9);
			background-image: -ms-linear-gradient(top, #3498db, #2980b9);
			background-image: -o-linear-gradient(top, #3498db, #2980b9);
			background-image: linear-gradient(to bottom, #3498db, #2980b9);
			-webkit-border-radius: 28;
			-moz-border-radius: 28;
			border-radius: 28px;
			font-family: Arial;
			color: white;
			font-size:20px;
			padding: 10px 20px 10px 20px;
			text-decoration: none;
			}
</style>
</head>
<head> 
	<title>CM 2018</title>	<!--Titlu sus la browser in dreptul numelui paginii-->
	
</head>	
<body > 
	<!--Titlu pe pagina ,referinte catre paginile pentru useri,respectiv administratori ,+setari stil afisare-->
	<pozitie_titlu>
		<div align="center", style="color:BLUE;font-size:70px;font-family:arial;">
		Campionatul Mondial 2018<br>
		Rusia
		</div>
	</pozitie_titlu>
	
	<pozitie_scris1>
		<a href= "login_html.php"><button class="buton">Continua cu cont</button></a> <br><br>
		
	</pozitie_scris1>	
		<pozitie_scris2>
		<a href= "Pagina_spectatori.php"><button class="buton">Continua ca vizitator</button></a><br>
	</pozitie_scris2>
	</body>
</html>