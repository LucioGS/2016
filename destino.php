<html>
<head>
</head>
<body>
<?php

	$film1 = $_POST["film1"];
	$director1 = $_POST["director1"];
	$protagonista1 = $_POST["protagonista1"];
	$estreno1 = $_POST["estreno1"];
	$film2 = $_POST["film2"];
	$director2 = $_POST["director2"];
	$protagonista2 = $_POST["protagonista2"];
	$estreno2 = $_POST["estreno2"];
	$film3 = $_POST["film3"];
	$director3 = $_POST["director3"];
	$protagonista3 = $_POST["protagonista3"];
	$estreno3 = $_POST["estreno3"];
	
	$peliculas = [];
	
	$peliculas[1]["film"] = $film1;
	$peliculas[1]["director"] = $director1;
	$peliculas[1]["protagonista"] = $protagonista1;
	$peliculas[1]["estreno"] = $estreno1;
	$peliculas[2]["film"] = $film2;
	$peliculas[2]["director"] = $director2;
	$peliculas[2]["protagonista"] = $protagonista2;
	$peliculas[2]["estreno"] = $estreno2;
	$peliculas[3]["film"] = $film3;
	$peliculas[3]["director"] = $director3;
	$peliculas[3]["protagonista"] = $protagonista3;
	$peliculas[3]["estreno"] = $estreno3;
	
	foreach ($peliculas as $pelicula) {
		echo $pelicula["film"];
		echo "</br>";
		echo $pelicula["director"];
		echo "</br>";
		echo $pelicula["protagonista"];
		echo "</br>";
		echo $pelicula["estreno"];
		echo "</br></br>";	
	}
		
?>
</body>
</html>

