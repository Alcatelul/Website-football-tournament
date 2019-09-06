<!DOCTYPE html>
<html>
	<head><!-- Setari imagine de fundal ,pozitii si stil buton-->
		<style>
			
			body {
				background-image: url("stadion.jpg");
				background-size:cover;
			}

			pozitie1 {
				position: absolute;
				left: 600px;
				top: 250px;
			}
			
				pozitie2 {
				position: absolute;
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
		<!-- Stil afisare text,campuri pentru scrierea nume,locatie si nr de locuri,button de submit in formular+butonul de intoarcere la pagina principala-->
		<div style="color:black;font-size:70px;text-align:center;font-family: arial;">
		Adauga stadion
		</div>
		
		<pozitie1>
			<form action="Adauga_stadioane_php.php" method="post">
				<font color="black">Nume</font><br>
				<input type="text" name="Nume"><br>
				<font color="black">Locatie</font><br>
				<input type="text" name="Locatie"><br>
				<font color="black">Numar de locuri</font><br>
				<input type="text" name="Numar_locuri"><br><br>
				<input type="submit" value="Adauga">
			</form>
		</pozitie1>
		<pozitie2>
<a href="Pagina_Principala.php">
			<button class="btn">
			Inapoi la pagina principala
			</button>
		</pozitie2>
	</body>
</html>