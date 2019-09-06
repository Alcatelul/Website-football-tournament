<!DOCTYPE html>
<html>
<head><!--Fundal-->
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
//Creare conexiune
$conn = new mysqli($servername, $username, $password,$dbname);

//Verificare conexiune
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$Grupa=$_POST['Grupa'];
//Interogare propriu-zisa
$sql="SELECT E.Nume_Echipa,G.Nume_Grupa
	FROM echipe E INNER JOIN grupe G ON E.Id_Grupa=G.Id_Grupa
	WHERE G.Nume_Grupa='$Grupa'" ;

$result = mysqli_query($conn,$sql);
//Tabel date scoase din interogare
echo "<p align=center><font size= 10,align=center>Echipele din grupa dorita</font>";
echo "<table border='1' align=center>
<tr>
<th>Nume Echipa</th>
<th>Nume Grupa</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Nume_Echipa'] . "</td>";
echo "<td>" . $row['Nume_Grupa'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"</p>";
//buton intoarcere la pagina principala
echo"<p align=center><a href= Pagina_Principala.php><button>Intoarce-te la pagina principala</button></a><br><br></p>";

mysqli_close($conn);
?>