<!DOCTYPE html>
<html>
<head>	<!--Setare Fundal pagina-->
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
	//Creeaza conexiune
$conn = new mysqli($servername, $username, $password,$dbname);

// Verifica conexiune
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//Data preluata de la pagina exterioara
$Data=$_POST['Data'];
//Interogarea propriu-zisa
$sql=" SELECT M.Ora_Meciului,M.Data_Meciului,(
			SELECT Nume_Stadion
			FROM stadioane S
			WHERE M.Id_Stadion=S.Id_Stadion) AS Nume_Stadion,(
			SELECT E.Nume_Echipa
			FROM echipe E
			WHERE E.Id_Echipa =(
				SELECT EM.Id_Echipa
				FROM echipe_meciuri EM
				WHERE EM.Id_Meci=M.Id_Meci AND EM.Numar_Echipa=1)) AS Echipa_1,(
			SELECT E.Nume_Echipa
			FROM echipe E
			WHERE E.Id_Echipa =(
				SELECT EM.Id_Echipa
				FROM echipe_meciuri EM
				WHERE EM.Id_Meci=M.Id_Meci AND EM.Numar_Echipa=2)) AS Echipa_2
		FROM meciuri M
		WHERE M.Data_Meciului='$Data'";

$result = mysqli_query($conn,$sql);
//Tabel de afisare
echo "<p align=center><font size= 10,align=center>Tabel meciuri la data $Data</font>";
echo "<table border='1' align=center>
<tr>
<th>Meci</th>
<th>Ora</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Echipa_1'] . "-" . $row['Echipa_2']. "</td>";
echo "<td>" . $row['Ora_Meciului'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"</p>";
//Buton de intoarcere la pagina principala
echo"<p align=center><a href='Pagina_Principala.php'>
			<button>
			Inapoi la pagina principala
			</button></p>";

mysqli_close($conn);
?>