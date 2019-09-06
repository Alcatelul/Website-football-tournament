<?php
//Date necesare pentru conexiune la baza de date
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "campionat_mondial";
//Creare conexiune
$conn = new mysqli($servername, $username, $password,$dbname);

//Verificare conexiune
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//Variabile cu valori preluate din formular aflat in pagina anterioara
$Nume_Vechi=$_POST['Nume_vechi'];
$Nume = $_POST['Nume'];
$Locatie = $_POST['Locatie'];	
$Numar_Locuri = $_POST['Numar_locuri'];
//Verificare validitate date
if($Nume_Vechi===''|| $Nume==='' || $Locatie==='' || $Numar_Locuri==='' || is_numeric($Nume_Vechi) || is_numeric($Nume) || is_numeric($Locatie) || !is_numeric($Numar_Locuri))
	trigger_error("Una sau mai multe din valorile introduse sunt invalide", E_USER_ERROR);
//Interogare pentru verificare existenta nume de stadion anterior
$sql= "Select Nume_Stadion from Stadioane";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
	
		if($row["Nume_Stadion"]===$Nume)
			trigger_error("Numele de stadion exista deja!", E_USER_ERROR); 
	
	}

}
$i=0;
//Interogare pentru aflare daca nume vechi se afla printre numele stadioanelor din baza de date
//Daca da,se executa update-ul
$sql= "Select Nume_Stadion from Stadioane";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
		if($row["Nume_Stadion"]===$Nume_Vechi)
		{$i=1;
			$sql2="UPDATE stadioane
	SET Nume_Stadion = '$Nume', Locatie_Stadion= '$Locatie',Numar_Locuri='$Numar_Locuri'
	WHERE Nume_Stadion='$Nume_Vechi'";
		if (mysqli_query($conn, $sql2))
			{	
    
			} 
		else 
			{
				echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
			}
		}
		
		
	


	}
		mysqli_close($conn);
if($i===0)
			trigger_error("Numele de stadion vechi nu exista!", E_USER_ERROR); 
}

?>
<!DOCTYPE html>
<html>
	<head><!--Imagine de fundal,pozitii si stil buton-->
		<style>
			body {
				background-image: url("stadion.jpg");
				background-size:cover;
			}
			
			pozitie_titlu {
				position: fixed;
				left: 150px;
				top: 20px;
			}
			
			pozitie1 {
				position:fixed;
				left: 450px;
				top: 270px;
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
				font-size:30px;
				padding: 10px 20px 10px 20px;
				text-decoration: none;
			}

		</style>
	</head>
<head> 
	<title>CM 2018</title>
	
</head>	
<body> 
	<pozitie_titlu><!--Stil text-->
		<div style="color:blue;font-size:70px;font-family:arial;">
		Inregistrarea a fost modificata!
		</div>
	</pozitie_titlu>
	<pozitie1><!--Buton catre pagina principala-->
		<a href="Pagina_Principala.php">
			<button class="btn">
			Inapoi la pagina principala
			</button>
		</a>
	</pozitie1>
	 
</body>
</html>