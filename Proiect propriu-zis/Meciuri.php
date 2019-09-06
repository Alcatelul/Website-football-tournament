<!DOCTYPE html>
<html>
<head><!--Fundal si stil buton-->
<style>
body {
	background-image: url("gazon.jpg");
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
	<title>CM 2018</title><!--Titlu-->
	
</head>	
<body > 

</body>
</html>

<?php
//Date pentru conexiune la Baza de date
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
//Interogare care returneaza meciurile 
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
//Tabel pentru afisare date din interogare
echo "<p align=center><font size= 10,align=center>Lista meciuri</font>";
echo "<table border='1' align=center>
<tr>
<th><font color=white><Echipa 1</font></th>
<th><font color=white>Echipa 2</font></th>
<th><font color=white>Ora meci</font></th>
<th><font color=white>Data meci</font></th>
<th><font color=white>Stadion</font></th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><font color=white>" . $row['Echipa_1'] . "</font></td>";
echo "<td><font color=white>" . $row['Echipa_2'] . "</font></td>";
echo "<td><font color=white>" . $row['Ora_Meciului'] . "</font></td>";
echo "<td><font color=white>" . $row['Data_Meciului'] . "</font></td>";
echo "<td><font color=white>" . $row['Nume_Stadion'] . "</font></td>";
echo "</tr>";
}
echo "</table>";
echo"</p>";
//Buton de intoarcere la pagina principala
echo"<p align=center><a href='Pagina_principala.php'>
<button class='btn'>Inapoi la pagina principala</button>
		</a></p>";

mysqli_close($conn);
?>