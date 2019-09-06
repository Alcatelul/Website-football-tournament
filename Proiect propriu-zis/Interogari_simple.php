<!DOCTYPE html>
<html>
	<head><!--Fundal ,pozitii si stil buton catre pagina principala-->
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
			
				pozitie4 {
				position: fixed;
				left: 50px;
				top: 500px;
			}
			
				pozitie5 {
				position: fixed;
				left: 600px;
				top: 500px;
			}
			
				pozitie6 {
				position: fixed;
				right:50px;
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
		<!--Stil pentru text-->
		<div style="color:black;font-size:70px;text-align:center;font-family: arial;">
		Interogari simple
		</div>
			<!--Formulare pentru trimitere date catre interogarile simple-->
		<pozitie1>
		
			<form action="Interogare_simpla1_php.php" method="post">
				<font color="black" size=4>Afisarea echipelor dintr-o grupa</font><br>
				<font color="black">Numele grupei</font><br>
				<input type="text" name="Grupa"><br>
				<input type="submit" value="Afiseaza">
			</form>
		</pozitie1>
		
		<pozitie2>
		
			<form action="Interogare_simpla2_php.php" method="post">
				<font color="black" size=4>Afisarea numelui selectionerului pentru o echipa</font><br>
				<font color="black">Echipa:</font><br>
				<input type="text" name="Echipa"><br>
				<input type="submit" value="Afiseaza">
			</form>
		</pozitie2>
		
			<pozitie3>
		
			<form action="Interogare_simpla3_php.php" method="post">
				<font color="black" size=4>Afisarea meciurilor dintr-o locatie</font><br>
				<font color="black">Nume locatie</font><br>
				<input type="text" name="Locatie"><br>
				<input type="submit" value="Afiseaza">
			</form>
		</pozitie3>
		
			<pozitie4>
		
			<form action="Interogare_simpla4_php.php" method="post">
				<font color="black" size=4>Afisarea locurilor disponibile pentru un meci</font><br>
				<font color="black">Nume Echipa 1</font><br>
				<input type="text" name="Echipa1"><br>
					<font color="black">Nume Echipa 2</font><br>
				<input type="text" name="Echipa2"><br>
				<input type="submit" value="Afiseaza">
			</form>
		</pozitie4>
		
			<pozitie5>
		
			<form action="Interogare_simpla5_php.php" method="post">
				<font color="black" size=4>Afisarea grupei unui meci</font><br>
				<font color="black">Nume Echipa 1</font><br>
				<input type="text" name="Echipa1"><br>
					<font color="black">Nume Echipa 2</font><br>
				<input type="text" name="Echipa2"><br>
				<input type="submit" value="Afiseaza">
			</form>
		</pozitie5>
		
		
			<pozitie6>
		
			<form action="Interogare_simpla6_php.php" method="post">
				<font color="black" size=4>Afisarea echipelor adverse unei echipe</font><br>
				<font color="black">Nume Echipa</font><br>
				<input type="text" name="Echipa"><br>
				<input type="submit" value="Afiseaza">
			</form>
		</pozitie6>
		<pozitie7>
			<!--Buton catre pagina principala--> 
			<a href="Pagina_Principala.php">
			<button class="btn">
			Inapoi la pagina principala
			</button>
		</a>
		</pozitie7>
	</body>
</html>