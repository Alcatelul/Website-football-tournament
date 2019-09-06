<!DOCTYPE html>
<html>
<head>	<!-- Fundal pagina -->
<style>

body {
	background-image: url("stadion.jpg");
	background-size:cover;
}

</style>
</head>
<head> 
	<title>CM 2018</title>	<!--Titlu-->
	
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

// Verifica conexiune
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//Variabila pentru retinere date primite de la pagina anterioara
$Locatia=$_POST['Locatia'];
//Interograrea propriu-zisa
$sql="SELECT COUNT(*) AS Numar_de_meciuri
	  FROM meciuri M 
	  WHERE M.Id_Stadion IN
		(SELECT S.Id_Stadion 
		FROM stadioane S 
		WHERE S.Locatie_Stadion='$Locatia')";
$result = mysqli_query($conn,$sql);
//Tabel pentru interogare
echo "<p align=center><font size= 10,align=center>Numarul de meciuri dintr-o locatie</font>";
echo "<table border='1' align=center>
<tr>
<th>Locatia</th>
<th>Numar de meciuri</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $Locatia . "</td>";
echo "<td>" . $row['Numar_de_meciuri'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"</p>";
//Buton de intoarcere la pagina principala
echo"<p align=center><a href= Pagina_Principala.php><button>Intoarce-te la pagina principala</button><br><br></p>";

mysqli_close($conn);
?>