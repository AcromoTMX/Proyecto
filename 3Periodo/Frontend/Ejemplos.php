<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Frontend</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        header {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(19, 47, 209, 1) 0%, rgba(11, 197, 233, 1) 50%, rgba(19, 47, 209, 1) 100%);
            color: white;
            padding: 10px;
        }

        p {
            font-size: 18px;
            color: #555;
            padding: 5px;
            text-align: left;
        }

        h2 {
            color: white;
            padding: 10px;
            border: #032fce solid 4px;
            border-radius: 10px;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(19, 47, 209, 1) 0%, rgba(11, 197, 233, 1) 50%, rgba(19, 47, 209, 1) 100%);
        }

        .list {
            border: 0cm;
        }

        div {
            width: 50%;
            display: inline-block;
            margin: 45px;
        }

        a {
            background-color: #105ac8;
            border-radius: 5px;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }

        a:hover {
            background-color: #0b4aa7;
        }

        footer {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(19, 47, 209, 1) 0%, rgba(11, 197, 233, 1) 50%, rgba(19, 47, 209, 1) 100%);
            margin-top: 100px;
            padding: 10px;
            color: white;
        }

        .foot {
            color: white;
            border: 0cm;
        }
    </style>
</head>

<body>
    <header>
        <h1>Arrays de PHP</h1>
    </header>
    <br> <br> <br>
    <a href="../../index.html">Index</a> <a href="Access.html">Accesibilidad</a> <a href="Frames.html">Frameworks</a> <a href="Frontend.html">Frontend</a>
    <br>
    <div>
        <br> <br>
        <h2>Ejemplos de arrays</h2> <br> <br>
        <p class="list" style="border-top: #105ac8 solid 3px;">
            <il >
                1. Array numérico indexado.
            </il>
        </p>
        <p>
            $nombre = "Aner"; <br>
            $array = array(1, 2, 3, "casa", $nombre);<br> <br>
 
<i><b>saco el numero de elementos</b></i> <br>
$longitud = count($array); <br> <br>
 
<i><b>Recorro todos los elementos</b></i> <br>
for($i=0; $i<$longitud; $i++) <br>
         { <br>
         <i><b>saco el valor de cada elemento</b></i> <br>
	     echo $array[$i]; <br>
	     echo "<'br'>";
         }
        </p> <br>
        <p style="border-bottom: #105ac8 solid 3px;">
           -Numéricos: 1, 2 y 3 <br>
-String: «casa». <br>
-Una variable con valor «Aner».
        </p> <br>
        <p class="list" style="border-top: #105ac8 solid 3px;">
            <il>
                2. array asociativo
            </il>
        </p>
        <p>
            $equipo = array(portero=>'Cech', defensa=>'Terry', medio=>'Lampard', delantero=>'Torres'); <br> <br>
 
foreach($equipo as $posicion=>$jugador) <br>
	{ <br>
	echo "El " . $posicion . " es " . $jugador; <br>
	echo "<'br'>";
	} <br>
        </p>
        <p style="border-bottom: #105ac8 solid 3px;">
        -$equipo = Nombre de array <br>
        -$posicion = array key <br>
        -$jugador = array value
        </p>
        <p class="list" style="border-top: #105ac8 solid 3px;">
            <il>
                3. array multidimensional.
            </il>
        </p>
        <p>$equipo_futbol = array <br>
 					( <br>
 					array("Rooney","Chicharito","Gigs"), <br>
 					array("Suarez"), <br>
 					array("Torres","Terry","Etoo") <br>
 					); <br> <br>
 
 foreach($equipo_futbol as $equipo) <br>
 	{ <br>
 	echo "En este equipo juegan: "; <br>
 	foreach($equipo as $jugador) <br>
 		{ <br>
 		echo $jugador ." "; <br>
 		} <br>
 	echo "<'br'>";
 	}</p>
    <p style="border-bottom: #105ac8 solid 3px;">
        -$equipo_futbol: Es un array contenedor de otros 3 arrays con jugadores de futbol. <br>
-Luego recorro el array con PHP foreach() $equipo_futbol y a su vez recorro cada array que encuentro para sacar los jugadores.
    </p>
        <br> <br>

        <h2>Ejemplos practicos</h2>
        <p style="border-top: #105ac8 solid 3px;">
            Problema 1: Un supermercado online desea almacenar los productos de su catálogo. Cada producto tendrá un nombre, precio y stock. <br> <br>

            Solución: Para resolver este problema, utilizaremos un array multidimensional de PHP donde habran 3 sub-arrays que cada una tendra un producto con su precio.
        </p>
        <?php
        $venta = array
 					( 
 					array("Trapo"=>"2300"),
 					array("Gomitas"=>"3200"), 
 					array("Balon"=>"50000")
 					);
       echo "Los productos en venta son: <br>";
        foreach($venta as $producto) {
            foreach ($producto as $objeto => $precio) {
                echo "$objeto = $$precio";
	            echo "<br>";
            }
	}
        ?>
        <br> <br>
        <p>
        Problema 2: Un colegio prepara una salida recreacional, tienen que almacenar los nombres de los estudiantes que van en el bus 1. <br> <br>

        Solución: Para resolver este problema, utilizaremos un array indexado de PHP donde cada elemento del array representa el nombre de un estudiante
        </p>
        <?php
        $bus = array('Manuel', 'Esteban', 'Carla', 'Valentina', 'Jose', 'Maria');

       echo "Los estudiantes que van en el primer bus son: <br>";
        foreach($bus as $estudiante) {
            echo  "$estudiante <br>";
	}
        ?>
        <p style="border-bottom: #105ac8 solid 3px;"></p>
        <br> <br>
        <a href="Array.html">Arrays</a>
    </div>
</body>

<footer>
    <p class="foot"><b>&copy; Sebastian Aguirre Oyola | 11-2.</b></p>
</footer>

</html>