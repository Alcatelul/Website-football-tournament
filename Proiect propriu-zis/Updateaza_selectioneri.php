<!DOCTYPE html>
<html>
	<head><!--Setare imagine de fundal ,setare pozitii ,stil buton-->
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
		Updateaza selectioneri
		</div>
		<!--Formular pentru transmitere date la pagina urmatoare-->
		<pozitie1>
			<form action="Updateaza_selectioneri_php.php" method="post">
				<font color="black">Echipa noului selectioner</font><br>
				<input type="text" name="Echipa"><br>
				<font color="black">Numele selectionerului</font><br>
				<input type="text" name="Nume"><br>
				<font color="black">Prenumele selectionerului</font><br>
				<input type="text" name="Prenume"><br>
				<input type="submit" value="Updateaza">
			</form>
		</pozitie1>
		<pozitie2><!--Buton catre prima pagina-->
		<a href="Pagina_Principala.php">
			<button class="btn">
			Inapoi la pagina principala
			</button>
		</pozitie2>
	</body>
</html>