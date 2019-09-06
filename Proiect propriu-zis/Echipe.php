<!DOCTYPE html>
<html>
<head><!--Fundal pagina,stil pentru buton-->
<style>
	
body {
	background-image: url("stadion.jpg");
	background-size:cover;
}

	btn {
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
	<title>CM 2018</title>	<!--Titlu sus la pagini deschise-->
	
</head>	
<body > 

</body>
</html>

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

// Interograre pentru afisare tabel echipe
$sql="SELECT E.Nume_Echipa,G.Nume_Grupa
	FROM echipe AS E INNER JOIN grupe AS G ON E.Id_Grupa=G.Id_Grupa";
$result = mysqli_query($conn,$sql);
//Tabel propriu-zis
echo "<p align=center><font size= 10,align=center>Tabel echipe</font>";
echo "<table border='1' align=center>
<tr>
<th>Nume Echipa</th>
<th>Grupa </th>
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
//button de intoarcere la pagina principala
echo"<p align=center><a href='Pagina_principala.php'>
<button class='btn'>Inapoi la pagina principala</button>
		</a></p>";
mysqli_close($conn);
?>