<?php
//Date necesare conectarii la baza de date
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
//Date preluate dintr-un formular din pagina precedenta
$Echipa=$_POST['Echipa'];
$Nume = $_POST['Nume'];
$Prenume = $_POST['Prenume'];
//Verificare validitate date	
if($Echipa===''|| $Nume==='' || $Prenume==='' || is_numeric($Echipa) || is_numeric($Nume) || is_numeric($Prenume))
	trigger_error("Una sau mai multe din valorile introduse sunt invalide", E_USER_ERROR);

//Update-ul propriu-zis
$sql="UPDATE selectioneri
	SET Nume_Selectioner = '$Nume', Prenume_Selectioner= '$Prenume'
	WHERE Id_Echipa=(SELECT E.Id_Echipa
					FROM echipe E
					WHERE E.Nume_Echipa='$Echipa')";
	
$result = mysqli_query($conn, $sql);
//Verificare daca s-a updatat tabelul
if (mysqli_affected_rows ( $conn ) == 0) 
{
	trigger_error("Tabelul nu a fost modificat deloc!", E_USER_ERROR); 
}

//Verificare ca interogarea a fost ok
if (mysqli_query($conn, $sql))
	{
    
	} 
else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
	<head><!--Setare imagine fundal,setare pozitii,setare stil buton-->
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
	<pozitie_titlu><!--Stil pentru text-->
		<div style="color:blue;font-size:70px;font-family:arial;">
		Tabelul Stadioane a fost modificat
		</div>
	</pozitie_titlu>
	<pozitie1><!--Buton pentru intoarcerea la pagina principala-->
		<a href="Pagina_Principala.php">
			<button class="btn">
			Inapoi la pagina principala
			</button>
		</a>
	</pozitie1>
	 
</body>
</html>