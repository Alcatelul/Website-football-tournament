<!DOCTYPE html>
<html>
<head><!--Setare fundal pagina-->
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

//Verifica conexiune
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$Locatia=$_POST['Locatie'];
//O prima interogare pentru aflarea datelor exceptand numele echipelor secunde din meciurile selectate
$sql="SELECT M.Ora_Meciului AS Ora,M.Data_Meciului AS Data,E.Nume_Echipa AS Echipa1,S.Nume_Stadion AS Nume_Std
	  FROM meciuri M INNER JOIN echipe_meciuri EM ON(M.Id_Meci=EM.Id_Meci)
					 INNER JOIN echipe E ON (EM.Id_Echipa=E.Id_Echipa)
					 INNER JOIN stadioane S ON (M.Id_Stadion=S.Id_Stadion)
					 WHERE S.Locatie_Stadion='$Locatia' AND EM.Numar_Echipa=1
					 ORDER BY M.Id_Meci";
$i=0;//variabila index folosita mai tarziu pentru scoaterea echipei potrivite din a doua interogare cu cea din prima interogare

$result = mysqli_query($conn,$sql);
//tabel pentru afisare date
echo "<p align=center><font size= 10,align=center>Tabelul meciurilor din $Locatia</font>";
echo "<table border='1' align=center>
<tr>
<th>Echipa 1</th>
<th>Echipa 2</th>
<th>Ora meci</th>
<th>Data meci</th>
<th>Nume Stadion</th>

</tr>";
while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['Echipa1'] . "</td>";
//A doua interogare necesara aflarii numelui echipelor secunde din meciurile selectate
$sql1=  "SELECT E.Nume_Echipa AS Echipa2
	  FROM meciuri M INNER JOIN echipe_meciuri EM ON(M.Id_Meci=EM.Id_Meci)
					 INNER JOIN echipe E ON (EM.Id_Echipa=E.Id_Echipa)
					 INNER JOIN stadioane S ON (M.Id_Stadion=S.Id_Stadion)
					 WHERE S.Locatie_Stadion='$Locatia' AND EM.Numar_Echipa=2
					 ORDER BY M.Id_Meci
					 LIMIT 1 OFFSET $i" ;
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result1,MYSQLI_NUM);
echo"<td>"; printf ("%s",$row1[0]);echo"</td>";//afisare echipa secunda potrivita
echo "<td>" . $row['Ora'] . "</td>";
echo "<td>" . $row['Data'] . "</td>";
echo "<td>" . $row['Nume_Std'] . "</td>";
$i=$i+1;
echo "</tr>";
}
echo "</table>";
echo"</p>";
//buton pentru intoarcerea la pagina principala
echo"<p align=center><a href= Pagina_Principala.php><button>Intoarce-te la pagina principala</button><br><br></p>";

mysqli_close($conn);
?>