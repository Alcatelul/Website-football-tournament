<!DOCTYPE html>
<html>
<head><!--Setare Fundal pagina-->
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
//Date pentru conectarea la baza de date
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
//Variabile extrase prin formularul din pagina anterioara
$Echipa1=$_POST['Echipa1'];
$Echipa2=$_POST['Echipa2'];
//Prima interogare pentru aflarea datelor specifice meciului mai putin numelui celei de-a doua echipe
$sql="SELECT M.Ora_Meciului AS Ora,M.Data_Meciului AS Data,E.Nume_Echipa AS Echipa1,S.Numar_Locuri AS Numar_Loc,G.Nume_Grupa
	  FROM meciuri M INNER JOIN echipe_meciuri EM ON(M.Id_Meci=EM.Id_Meci)
					 INNER JOIN echipe E ON (EM.Id_Echipa=E.Id_Echipa)
					 INNER JOIN stadioane S ON (M.Id_Stadion=S.Id_Stadion)
					 INNER JOIN grupe G ON (G.Id_Grupa=E.Id_Grupa)
					 WHERE E.Nume_Echipa='$Echipa1' AND EM.Numar_Echipa=1
					 ORDER BY M.Id_Meci";
$i=0;//index pentru aflare echipa secunda potrivita meciului respectiv

$result = mysqli_query($conn,$sql);
//Tabel pentru afisare date
echo "<p align=center><font size= 10,align=center>Grupa in care se desfasoara meciul $Echipa1-$Echipa2</font>";
echo "<table border='1' align=center>
<tr>
<th>Echipa 1</th>
<th>Echipa 2</th>
<th>Grupa</th>
</tr>";
while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>" . $row['Echipa1'] . "</td>";
//a doua interogare pentru aflarea numelui echipei secunde pentru fiecare meci in mod corect
$sql1=  "SELECT E.Nume_Echipa AS Echipa2
	  FROM meciuri M INNER JOIN echipe_meciuri EM ON(M.Id_Meci=EM.Id_Meci)
					 INNER JOIN echipe E ON (EM.Id_Echipa=E.Id_Echipa)
					 INNER JOIN stadioane S ON (M.Id_Stadion=S.Id_Stadion)
					 WHERE E.Nume_Echipa='$Echipa2' AND EM.Numar_Echipa=2
					 ORDER BY M.Id_Meci
					 LIMIT 1 OFFSET $i" ;
$result1 = mysqli_query($conn,$sql1);
//Verificare ca echipele fac sau nu parte din aceeasi grupa
if (mysqli_num_rows($result1) ==0) 
	trigger_error("Echipele nu fac parte din aceeasi grupa!", E_USER_ERROR); 
$row1 = mysqli_fetch_array($result1,MYSQLI_NUM);

echo"<td>"; printf ("%s",$row1[0]);echo"</td>";
echo "<td>" . $row['Nume_Grupa'] . "</td>";
$i=$i+1;
echo "</tr>";
}
echo "</table>";
echo"</p>";
//Buton de intoarcere la pagina principala
echo"<p align=center><a href= Pagina_Principala.php><button>Intoarce-te la pagina principala</button><br><br></p>";

mysqli_close($conn);
?>