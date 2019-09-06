<!DOCTYPE html>
<html>
<head><!--Imagine de fundal si definire stil buton-->
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
	<title>CM 2018</title>
	
</head>	
<body > 

</body>
</html>

<?php
//Informatii pentru conectarea la baza de date
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "campionat_mondial";
//Creare conexiune
$conn = new mysqli($servername, $username, $password,$dbname);
//Verifica conexiunea
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//Interogare pentru a arata selectionerii
$sql="SELECT S.Nume_Selectioner,S.Prenume_Selectioner,(
		SELECT E.Nume_Echipa
		FROM echipe E
		WHERE E.Id_Echipa=S.Id_Echipa) AS Echipa_Selectioner
		FROM selectioneri S";
$result = mysqli_query($conn,$sql);
//Tabel pentru afisarea datelor de la interogare
echo "<p align=center><font size= 10,align=center>Tabel selectioneri</font>";
echo "<table border='1' align=center>
<tr>
<th>Nume </th>
<th>Prenume </th>
<th>Echipa</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Nume_Selectioner'] . "</td>";
echo "<td>" . $row['Prenume_Selectioner'] . "</td>";
echo "<td>" . $row['Echipa_Selectioner'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"</p>";
//Buton pentru intoarcerea la pagina principala
echo"<p align=center><a href='Pagina_principala.php'>
<button class='btn'>Inapoi la pagina principala</button>
		</a></p>";
mysqli_close($conn);
?>