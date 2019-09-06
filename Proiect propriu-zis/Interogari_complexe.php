<!DOCTYPE html>
<html>
	<head><!--Setare fundat,pozitii pentru text,stil pentru buton pagina principala-->
		<style>
				
			body {
				background-image: url("stadion.jpg");
				background-size:cover;
			}

			pozitie1 {
				position: fixed;
				left: 50px;
				top: 100px;
			}
			
				pozitie2{
				position: fixed;
				left: 600px;
				top: 100px;
			}
			
				pozitie3 {
				position: fixed;
				right: 50px;
				top: 100px;
			}
			
		
			
				pozitie5 {
				position: fixed;
				left: 600px;
				top: 500px;
			}
			
			
		
			
				pozitie7 {
				position: fixed;
				left: 550px;
				top: 300px;
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
	<!-- Stil pentru text-->	
		<div style="color:black;font-size:70px;text-align:center;font-family: arial;">
		Interogari complexe
		</div>
			<!--Formulare pentru trimitere date la fiecare interogare-->
		<pozitie1>
		
			<form action="Interogare_complexa1_php.php" method="post">
				<font color="black" size=4>Numarul de meciuri dintr-o locatie</font><br>
				<font color="black">Locatia</font><br>
				<input type="text" name="Locatia"><br>
				<input type="submit" value="Afiseaza">
			</form>
		</pozitie1>
		
		<pozitie2>
		
			<form action="Interogare_complexa2_php.php" method="post">
				<font color="black" size=4>Selectionerul si grupa pentru o echipa</font><br>
				<font color="black">Pentru echipa</font><br>
				<input type="text" name="Echipa"><br>
				<input type="submit" value="Afiseaza">
			</form>
		</pozitie2>
		
			<pozitie3>
		
			<form action="Interogare_complexa3_php.php" method="post">
				<font color="black" size=4>Afisarea meciurilor dintr-o data</font><br>
				<font color="black">Data</font><br>
				<input type="text" name="Data"><br>
				<input type="submit" value="Afiseaza">
			</form>
		</pozitie3>
			<pozitie5>
		
			<form action="Interogare_complexa4_php.php" method="post">
				<font color="black" size=4>Afisarea numarului total de locuri pentru meciurile unei echipe</font><br>
				<font color="black">Nume Echipa </font><br>
				<input type="text" name="Echipa"><br>
				<input type="submit" value="Afiseaza">
			</form>
		</pozitie5>
		
		<pozitie7>
				<!--Buton pentru intoarcere la pagina principala-->
				<a href="Pagina_Principala.php">
			<button class="btn">
			Inapoi la pagina principala
			</button>
		</a>
		</pozitie7>
	</body>
</html>