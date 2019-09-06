
<!DOCTYPE html>
<html>
<head><!--Setare fundal ,pozitii pentru texte ,stil liste dropdown-->
<style>
body {
	background-image: url("gazon.jpg");
	background-size:cover;
}
pozitie1 {
    position: fixed;
    left: 300px;
    top: 270px;
}
pozitie2 {
	position: fixed;
    left: 600px;
    top: 270px;
}
pozitie3 {
	position: fixed;
    left: 900px;
    top: 270px;
}

pozitie4 {
	position: fixed;
    right: 100px;
    top: 270px;
}

pozitie5 {
	position: fixed;
    left: 100px;
    top: 270px;
}
pozitie_titlu {
	position: fixed;
	left: 500px;
	top: 20px;
}
.dropbtn {
    background-color:blue;
    color: white;
    padding: 20px;
    font-size: 20px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: absolute;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 20px 20px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<head> 
	<title>Pagina Principala</title>
	
</head>	
<body > <!--stil text titlu pagina-->
	<pozitie_titlu>
		<div style="color:blue;font-size:70px;font-family: arial;">
		CMF 2018<br>
		Rusia
		</div>
	</pozitie_titlu>
	<!--Urmeaza butoanele de tip dropdown,cu continutul lor-->
	<div class="dropdown">
		<pozitie1> 
			<button class="dropbtn">
				Stadioane
			</button>
			<div class="dropdown-content">
				<a href="stadioane.php">Afiseaza stadioane</a>
				<a href="Adauga_stadioane.php">Adauga</a>
				<a href="Sterge_stadioane.php">Sterge</a>
				<a href="Updateaza_stadioane.php">Updateaza</a>
			</div>
		</pozitie1>
	</div>
    <div class="dropdown">	
		<pozitie3> 
			<button class="dropbtn">
				Selectioneri
			</button>
			<div class="dropdown-content">
				<a href="selectioneri.php">Afiseaza Selectioneri</a>
				<a href="Adauga_selectioneri.php">Adauga</a>
				<a href="Sterge_selectioneri.php">Sterge</a>
				<a href="Updateaza_selectioneri.php">Updateaza</a>
			</div>
		</pozitie3>
	</div>
	<div class="dropdown">	
		<pozitie2> 
			<button class="dropbtn">
				Interogari
			</button>
			<div class="dropdown-content">
				<a href="Interogari_simple.php">Simple</a>
				<a href="Interogari_complexe.php">Complexe</a>
			</div>
		</pozitie2>
	</div>
	
	<div class="dropdown">	
		<pozitie4> 
			<button class="dropbtn">
				Echipe
			</button>
			<div class="dropdown-content">
				<a href="echipe.php">Afiseaza Echipe</a>
			</div>
		</pozitie4>
	</div>
	
	<div class="dropdown">	
		<pozitie5> 
			<button class="dropbtn">
				Meciuri
			</button>
			<div class="dropdown-content">
				<a href="Meciuri.php">Afiseaza Meciuri</a>
			</div>
		</pozitie5>
	</div>
</body>
</html>