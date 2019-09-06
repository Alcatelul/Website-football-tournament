<!DOCTYPE html>
<html>
<head>
<!--Imagine de fundal + stil buton-->
<style>

body {
	background-image: url("stadion.jpg");
	background-size:cover;
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
$result = mysqli_query($conn,"SELECT * FROM stadioane");
//Tabel pentru afisare date
echo "<p align=center><font size= 10,align=center>Tabel stadioane</font>";
echo "<table border='1' align=center>
<tr>
<th>Nume Stadion</th>
<th>Locatie</th>
<th>Numar Locuri</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Nume_Stadion'] . "</td>";
echo "<td>" . $row['Locatie_Stadion'] . "</td>";
echo "<td>" . $row['Numar_Locuri'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"</p>";
//Buton pentru intoarcere la pagina principala
echo"<p align=center><a href='Pagina_principala.php'>
<button class='btn'>Inapoi la pagina principala</button>
		</a></p>";
mysqli_close($conn);
?>