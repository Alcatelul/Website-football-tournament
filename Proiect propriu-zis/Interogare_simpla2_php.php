<!DOCTYPE html>
<html>
<head>
<!--Fundal-->
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
$Echipa=$_POST['Echipa'];
//Interogare propriu-zisa
$sql="SELECT E.Nume_Echipa,S.Nume_Selectioner,S.Prenume_Selectioner
	FROM echipe AS E INNER JOIN selectioneri AS S ON	E.Id_Echipa=S.Id_Echipa
	WHERE E.Nume_Echipa='$Echipa'" ;

$result = mysqli_query($conn,$sql);
//Tabel pentru afisarea datelor din interogare
echo "<p align=center><font size= 10,align=center>Numele selectionerului pentru echipa dorita</font>";
echo "<table border='1' align=center>
<tr>
<th>Nume Echipa</th>
<th>Nume Selectioner</th>
<th>Prenume Selectioner</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Nume_Echipa'] . "</td>";
echo "<td>" . $row['Nume_Selectioner'] . "</td>";
echo "<td>" . $row['Prenume_Selectioner'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo"</p>";
//Buton catre pagina principala
echo"<p align=center><a href= Pagina_Principala.php><button>Intoarce-te la pagina principala</button><br><br></p>";

mysqli_close($conn);
?>