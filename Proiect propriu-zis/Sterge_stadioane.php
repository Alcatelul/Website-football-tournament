<!DOCTYPE html>
<html>
	<head><!--Setare imagine de fundal,pozitii in pagina,stil buton-->
		<style>
			body {
				background-image: url("stadion.jpg");
				background-size:cover;
			}

			pozitie1 {
				position: fixed;
				left: 600px;
				top: 250px;
			}
			pozitie2 {
				position: fixed;
				left: 550px;
				top: 500px;
			}
			
			.btn {
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
	
	<body> 
		<div style="color:black;font-size:70px;text-align:center;font-family: arial;">
		Sterge stadion
		</div>
		<!--Formular pentru introducerea datelor necesare stergerii stadionului dorit-->
		<pozitie1>
			<form action="Sterge_stadioane_php.php" method="post">
				<font color="black">Introduceti numele stadionului care doriti a fi sters</font><br>
				<input type="text" name="Nume_Stadion"><br><br>
				<input type="submit" value="Sterge">
			</form>
		</pozitie1>
		<pozitie2>
		<!--Buton pentru intoarcerea la pagina principala-->
			<a href="Pagina_Principala.php">
			<button class="btn">
			Inapoi la pagina principala
			</button>
		</pozitie2>
	</body>
</html>