<!DOCTYPE html>
<html>
<head><!--Setare fundal pagina-->
<style>
	
body {
	background-image: url("stadion.jpg");
	background-size:cover;
}

poztit {
	position: fixed;
	left: 300px;
	top: 20px;

</style>
</head>
<head> 
	<title>CM 2018</title>
	
</head>	
<body > 

</body>
</html>

<?php
//Date pentru conectare la baza
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "campionat_mondial";
	// Creare conexiune
$conn = new mysqli($servername, $username, $password,$dbname);

// verifica conexiunea
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$Echipa=$_POST['Echipa'];
//Interogare propriu-zisa
$sql="SELECT SUM(S.Numar_Locuri) AS Numar_total
      FROM Stadioane S 
	  WHERE S.Id_stadion IN
		( SELECT M.Id_Stadion 
		FROM meciuri M 
		WHERE M.Id_Meci IN(
			SELECT EM.Id_Meci
			FROM echipe_meciuri EM
			WHERE Id_Echipa =(
			SELECT E.Id_Echipa
			FROM echipe E
			WHERE E.Nume_Echipa='$Echipa')))" ;

$result = mysqli_query($conn,$sql);
//Tabel pentru afisare
echo "<p align=center><font size= 10,align=center>Echipa cu suma numarului de locuri la toate meciurile ei</font>";
echo "<table border='1' align=center>
<tr>
<th>Numele Echipei</th>
<th>Numar de locuri la meciuri</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $Echipa . "</td>";
echo "<td>" . $row['Numar_total'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"</p>";
//Buton catre pagina principala
echo"<p align=center><a href='Pagina_Principala.php'>
			<button>
			Inapoi la pagina principala
			</button></p>";;

mysqli_close($conn);
?>