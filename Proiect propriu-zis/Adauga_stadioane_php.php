<?php
//Date conexiune
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "campionat_mondial";
	// Creeaza conexiune
$conn = new mysqli($servername, $username, $password,$dbname);

// Verifica conexiune
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//Variabile ce retin datele venite din formularul de pe pagina anterioara
$Nume = $_POST['Nume'];
$Locatie = $_POST['Locatie'];	
$Numar_locuri = $_POST['Numar_locuri'];
//Verifica validitate informatii introduse
if($Nume==='' || $Locatie==='' || $Numar_locuri==='' || is_numeric($Nume) || is_numeric($Locatie) || !is_numeric($Numar_locuri))
	trigger_error("Una sau mai multe valori introduse nu sunt valide!", E_USER_ERROR);
//Aflare ultimul id pentru a da urmatorul id urmatoarei intregistrari
$id= "Select Id_Stadion from Stadioane";
$result1 = mysqli_query($conn, $id);
$row2="0";
if (mysqli_num_rows($result1) > 0) 
{
    while($row1 = mysqli_fetch_assoc($result1)) {
			if($row2<$row1["Id_Stadion"])
				$row2=$row1["Id_Stadion"];
	}
}

$id=intval($row2);
$id=$id+1;
//Verificare existenta precedenta a numuelui de stadion
$sql= "Select Nume_Stadion from Stadioane";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
	
		if($row["Nume_Stadion"]===$Nume)
			trigger_error("Numele de stadion exista deja!", E_USER_ERROR); 
	
	}

}

//Inserare propriu-zisa + verificare succes inserare
$sql = "INSERT INTO stadioane (Id_Stadion,Nume_Stadion, Locatie_Stadion,Numar_locuri)
VALUES ('$id','$Nume', '$Locatie', '$Numar_locuri')";

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
	<head><!--Setare imagine fundal,pozitii pentru text si stil buton-->
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
	<pozitie_titlu>
		<!--Titlu,text in pagina si buton de intoarcere la pagina principala-->
		<div style="color:blue;font-size:70px;font-family:arial;">
		Inregistrarea a fost introdusa in tabel!
		</div>
	</pozitie_titlu>
	<pozitie1>
		<a href="Pagina_Principala.php">
			<button class="btn">
			Inapoi la pagina principala
			</button>
		</a>
	</pozitie1>
	 
</body>
</html>