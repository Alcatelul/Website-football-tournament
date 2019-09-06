<?php
//Date pentru conectarea la BD
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "campionat_mondial";
//Creeaza conexiunea
$conn = new mysqli($servername, $username, $password,$dbname);

//Verifica conexiunea
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$Echipa=$_POST['Echipa'];
//Verificare validitate date
if($Echipa ==='' || is_numeric($Echipa))
	trigger_error("Una sau mai multe din valorile introduse sunt invalide", E_USER_ERROR);
//Aflare id_echipa
$sql= "SELECT E.Nume_Echipa,E.Id_Echipa
	   FROM Echipe E
	   WHERE E.Id_Echipa IN(
			SELECT S.Id_Echipa
			FROM selectioneri S)";
$result = mysqli_query($conn, $sql);
$i=0;
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
	
		if($row["Nume_Echipa"]===$Echipa)
			{$i=1;
			$Id_Ech=$row["Id_Echipa"];}
	}
}
	
 if($i===0)
 {
	trigger_error("Nu exista numele echipei selectionerului !", E_USER_ERROR); 
 }
 //Stergerea propriu-zisa
$sql = "DELETE FROM selectioneri WHERE Id_Echipa='$Id_Ech'";

if (mysqli_query($conn, $sql)) {
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

$conn->close();
?>

<!DOCTYPE html>
<html>
	<head><!--Imagine de fond,pozitii si stil buton-->
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
				font-size: 30px;
				padding: 10px 20px 10px 20px;
				text-decoration: none;
			}

		</style>
	</head>
<head> 
	<title>CM 2018</title>
	
</head>	
<body >
 
	<pozitie_titlu><!--Stil text-->
		<div style="color:blue;font-size:70px;font-family: arial;">
		Tabelul stadioane a fost modificat
		</div>
	</pozitie_titlu>
    <pozitie1>
	<!--Buton catre pagina principala-->
		<a href="Pagina_Principala.php">
			<button class="btn">
			Inapoi la pagina principala
			</button>
		</a>
	</pozitie1>  
</body>
</html>