<!DOCTYPE html>
<html>
<head><!--Setare imagine de fundal-->
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
//Date pentru conexiune
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
//Interogare pentru aflarea meciurilor
$sql= " SELECT M.Ora_Meciului,M.Data_Meciului,(
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
		FROM meciuri M";
$result = mysqli_query($conn,$sql);
//Tabel pentru afisarea meciurilor
echo "<p align=center><font size= 10,align=center>Te asteptam la meciuri!</font>";
echo "<table border='1' align=center>
<tr>
<th>Echipa 1</th>
<th>Echipa 2</th>
<th>Ora meci</th>
<th>Data meci</th>
<th>Stadion</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Echipa_1'] . "</td>";
echo "<td>" . $row['Echipa_2'] . "</td>";
echo "<td>" . $row['Ora_Meciului'] . "</td>";
echo "<td>" . $row['Data_Meciului'] . "</td>";
echo "<td>" . $row['Nume_Stadion'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"</p>";
//Buton pentru intoarcere la prima pagina
echo"<p align=center><a href='index.php'>
<button >Inapoi la prima pagina</button>
		</a></p>";

mysqli_close($conn);
?>