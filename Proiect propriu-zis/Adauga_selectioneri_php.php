<?php
//Date pentru conectare
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "campionat_mondial";
	// Creare conexiune
$conn = new mysqli($servername, $username, $password,$dbname);

// Verificare conexiune
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//Salvare date preluate din pagina anterioara in variabile
$Nume = $_POST['Nume'];
$Prenume = $_POST['Prenume'];	
$Nume_Echipa = $_POST['Echipa'];
//Verificare pentru validitate date
if($Nume==='' || $Prenume==='' || $Nume_Echipa==='' || is_numeric($Nume) || is_numeric($Prenume) || is_numeric($Nume_Echipa))
	trigger_error("Una sau mai multe din valorile introduse sunt invalide!", E_USER_ERROR);
//Aflare id pentru a adauga inregistrarea la finalul tabelului
$id= "Select Id_Selectioner from selectioneri";
$result = mysqli_query($conn, $id);
$row2="0";
if (mysqli_num_rows($result) > 0) 
{
    while($row1 = mysqli_fetch_assoc($result)) {
			if($row2<$row1["Id_Selectioner"])
				$row2=$row1["Id_Selectioner"];
	}
}

$id=intval($row2);
$id=$id+1;
//Verificare pentru existenta anterioara a numelui selectionerului
$sql= "Select Nume_Selectioner from selectioneri";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
	
		if($row["Nume_Selectioner"]===$Nume)
			trigger_error("Numele selectionerului exista deja!", E_USER_ERROR); 
	
	}
}
//Verificare pentru existenta anterioara a numelui echipei
$sql= "SELECT E.Nume_Echipa,E.Id_Echipa
	   FROM Echipe E
	   WHERE E.Id_Echipa IN(
			SELECT S.Id_Echipa
			FROM selectioneri S)";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
	
		if($row["Nume_Echipa"]===$Nume_Echipa)
			trigger_error("Echipa are deja un selectioner!", E_USER_ERROR); 
	
	}
}
//Scoatere Nume Echipa si id echipa pentru inserare si verificarea existentei numelui echipei
$sql= "SELECT E.Nume_Echipa ,E.Id_Echipa
		FROM echipe E";
$result = mysqli_query($conn, $sql);
$index=1;
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
	
		if($row["Nume_Echipa"]===$Nume_Echipa)
		{$index=0;
		 $id_ech=$row["Id_Echipa"];
			$sql = "INSERT INTO selectioneri (Id_Selectioner,Nume_Selectioner, Prenume_Selectioner,Id_Echipa)
					VALUES ('$id','$Nume', '$Prenume', '$id_ech')";

			if (mysqli_query($conn, $sql))
				{
    
				} 
			else 
				{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			mysqli_close($conn);
		}
	}
}
if($index==1)
{trigger_error("Numele echipei nu este in grupe!", E_USER_ERROR);
mysqli_close($conn);}
?>
<!DOCTYPE html>
<html>
	<head><!-- Setare fundal pagina si pozitii,precum si stil buton-->
		<style>
			
			body {
				background-image: url("stadion.jpg");
				background-size:cover;
			}
			
			pozitie_titlu {
				position: absolute;
				left: 200px;
				top: 20px;
			}
			
			pozitie1 {
				position:absolute;
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
	<!-- Stil afisare text in pagina + buton pentru pagina principala-->
	<poztitie_titlu>
		<div style="color:blue;font-size:70px;font-family:arial;">
		Tabelul Selectioneri a fost modificat
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