<?php
//Date pentru conectarea la baza de date
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "campionat_mondial";
//Crearea conexiunii
$conn = new mysqli($servername, $username, $password,$dbname);

//Verificarea conexiunii
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//Date luate din formularul din pagina trecuta
$user = $_POST['user'];
$pass = $_POST['parola'];
//Verificare date
if($user==='admin' && $pass==='admin')
	header('Location: Pagina_Principala.php'); 
else
		trigger_error("Valorile introduse nu sunt potrivite!", E_USER_ERROR);
if($user==='' || $pass==='' )
	trigger_error("Valorile introduse sunt invalide!", E_USER_ERROR);
?>
