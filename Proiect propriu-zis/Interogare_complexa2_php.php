<!DOCTYPE html>
<html>
<head>	<!--Setare fundal pagina -->
<style>

body {
	background-image: url("stadion.jpg");
	background-size:cover;
}

</style>
</head>
<head> 
	<title>CM 2018</title>
	
</head>	
<body > 
</body>
</html>

<?php
//Date pentru conectare la baza de date
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
//Variabila pentru retinere date primite din exterior
$Echipa=$_POST['Echipa'];
//Interogare propriu-zisa
$sql="SELECT S.Nume_Selectioner AS Nume,S.Prenume_Selectioner AS Prenume,(
		SELECT G.Nume_Grupa
		FROM grupe G,echipe E
		WHERE G.Id_Grupa=E.Id_Grupa AND E.Nume_Echipa='$Echipa') AS Nume_Gr
	  FROM selectioneri S
	  WHERE S.Id_Echipa=
		(SELECT E.Id_Echipa
		FROM echipe E
		WHERE E.Nume_Echipa='$Echipa')" ;

$result = mysqli_query($conn,$sql);
//Tabel
echo "<p align=center><font size= 10,align=center>Tabel Echipa cu numele grupei sale si numele selectionerului</font>";
echo "<table border='1' align=center>
<tr>
<th>Echipa</th>
<th>Grupa </th>
<th>Nume si prenume selectioner</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $Echipa . "</td>";
echo "<td>" . $row['Nume_Gr'] . "</td>";
echo "<td>" . $row['Nume'] . " " .$row['Prenume'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"</p>";
//Buton de intoarcere la pagina principala
echo"<p align=center>	<a href='Pagina_Principala.php'>
			<button>
			Inapoi la pagina principala
			</button></a></p>";

mysqli_close($conn);
?>