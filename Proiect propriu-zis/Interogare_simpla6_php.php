<!DOCTYPE html>
<html>
<head><!-- Setare imagine fundal-->
<style>
	
body {
	background-image: url("stadion.jpg");
	background-size:cover;
}

</style>
</head>
<head> 
	<title>CM 2018</title>	<!--Setare titlu sus la pagini deschise-->
	
</head>	
<body > 

</body>
</html>

<?php
//Date pentru conectare la BD
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
$Echipa=$_POST['Echipa'];
//Prima interogare pentru aflare date referitoare la meci mai putin numele echipei secunde
$sql="SELECT E.Id_Grupa,E.Nume_Echipa AS Echipa1
	  FROM meciuri M INNER JOIN echipe_meciuri EM ON(M.Id_Meci=EM.Id_Meci)
					 INNER JOIN echipe E ON (EM.Id_Echipa=E.Id_Echipa)
					 INNER JOIN stadioane S ON (M.Id_Stadion=S.Id_Stadion)
					 WHERE E.Nume_Echipa='$Echipa' AND (EM.Numar_Echipa=1 OR EM.Numar_Echipa=2)
					 ORDER BY M.Id_Meci";
$i=0;//index necesar aflarii numelui echipei potrivite in a doua interogare pentru datele aflate in prima interogare

$result = mysqli_query($conn,$sql);
//Tabel pentru afisare date extrase
echo "<p align=center><font size= 10,align=center>Tabelul cu adversarii echipei $Echipa</font>";
echo "<table border='1' align=center>
<tr>
<th>Echipa 1</th>
<th>Echipa 2</th>


</tr>";
while($row = mysqli_fetch_array($result))
{$Grupa=$row['Id_Grupa'];
echo "<tr>";
echo "<td>" . $row['Echipa1'] . "</td>";
//Interogare secunda pentru aflarea numelui celei de-a doua echipa din meciuri in mod potrivit
$sql1=  "SELECT E.Nume_Echipa AS Echipa2
	  FROM meciuri M INNER JOIN echipe_meciuri EM ON(M.Id_Meci=EM.Id_Meci)
					 INNER JOIN echipe E ON (EM.Id_Echipa=E.Id_Echipa)
					 INNER JOIN stadioane S ON (M.Id_Stadion=S.Id_Stadion)
					 WHERE (EM.Numar_Echipa=1 OR EM.Numar_Echipa=2) AND (E.Nume_Echipa!='$Echipa' AND E.Id_Grupa='$Grupa')
					 ORDER BY M.Id_Meci
					 LIMIT 1 OFFSET $i" ;
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result1,MYSQLI_NUM);
echo"<td>"; printf ("%s",$row1[0]);echo"</td>";
$i=$i+1;
echo "</tr>";
}
echo "</table>";
echo"</p>";
//Buton pentru intoarcere la pagina principala
echo"<p align=center><a href= Pagina_Principala.php><button>Intoarce-te la pagina principala</button><br><br></p>";

mysqli_close($conn);
?>