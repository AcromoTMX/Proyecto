<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudades Colombia</title>
</head>
<body>
    
</body>
</html>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Protafolio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="../../index.html" class="logo"><strong>Proyecto CyT</strong> de Sebastian Aguirre</a>
                </header>

                <!-- Banner -->
                <section id="banner">
                    <div class="content">
                        
                    <?php
	$a = 1;
    echo "Las notas de estos estudiantes en Matematicas, Ciencias y Literatura son respectivamente: <br> <br>"; 

	for ($i=0; $i < 3; $i++) {
        $nota1[] = rand(0, 5);
		$nota2[] = rand(0, 5);
		$nota3[] = rand(0, 5);
        }
 
echo "<table>";
        echo "<tr><td>Estudiante</td><td>Matematicas</td><td>Ciencias</td><td>Literatura</td></tr>";
         for ($i=0; $i < 3; $i++) {
            echo "<tr><td>Estudiante $a </td>";
            echo "<td>".$nota1[$i]."</td>";
			echo "<td>".$nota2[$i]."</td>";
            echo "<td>".$nota3[$i]."</td></tr>";
		$a++;
        }
        echo " </table>";
    ?>
                    </div>
                </section>

                <!-- Section -->


                <!-- Section -->


            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar">
            <div class="inner">

                <!-- Menu -->
                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="../../index.html">Index</a></li>
                        <li>
                            <span class="opener">1er Periodo</span>
                            <ul>
                                <a>Actividad 1</a>
                                <ul>
                                    <li><a href="../../1Periodo/Actividad 1/Punto 1.php">Punto 1</a></li>
                                    <li><a href="../../1Periodo/Actividad 1/Punto 2.php">Punto 2</a></li>
                                    <li><a href="../../1Periodo/Actividad 1/Punto 3.php">Punto 3</a></li>
                                    <li><a href="../../1Periodo/Actividad 1/Punto 4.php">Punto 4</a></li>
                                    <li><a href="../../1Periodo/Actividad 1/Punto 5.php">Punto 5</a></li>
                                </ul>
                                <a>Actividad 2</a>
                                <ul>
                                    <li><a href="../../1Periodo/Condicionales/Ejemplo-Color.php">Ejemplo 1</a></li>
                                    <li><a href="../../1Periodo/Condicionales/Ejemplo-NumFijo.php">Ejemplo 2</a></li>
                                    <li><a href="../../1Periodo/Condicionales/Ejemplo-Numero.php">Ejemplo 3</a></li>
                                    <li><a href="../../1Periodo/Condicionales/DescMonto.php">Punto 1</a></li>
                                    <li><a href="../../1Periodo/Condicionales/Ingreso.php">Punto 2</a></li>
                                    <li><a href="../../1Periodo/Condicionales/Notas.php">Punto 3</a></li>
                                </ul>
                                <a>Actividad 3</a>
                                <ul>
                                    <li><a href="../../1Periodo/Variables/Areas-C.php">Punto 1</a></li>
                                    <li><a href="../../1Periodo/Variables/Areas-O.php">Punto 2</a></li>
                                    <li><a href="../../1Periodo/Variables/Areas-T.php">Punto 3</a></li>
                                    <li><a href="../../1Periodo/Variables/Areas-R.php">Punto 4</a></li>
                                    <li><a href="../../1Periodo/Variables/Ejercicio-1.php">Punto 5</a></li>
                                    <li><a href="../../1Periodo/Variables/IMC.php">Punto 6</a></li>
                                    <li><a href="../../1Periodo/Variables/Nota_Final.php">Punto 7</a></li>
                                </ul>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">2do Periodo</span>
                            <ul>
                                <a>Actividad 1</a>
                                <ul>
                                    <li><a href="../../2Periodo/Ciclos/ejercicio1.html">Punto 1</a></li>
                                    <li><a href="../../2Periodo/Ciclos/ejercicio2.html">Punto 2</a></li>
                                    <li><a href="../../2Periodo/Ciclos/ejercicio3.php">Punto 3</a></li>
                                    <li><a href="../../2Periodo/Ciclos/ejercicio4.php">Punto 4</a></li>
                                </ul>
                                <a>Actividad 2</a>
                                <ul>
                                    <li><a href="../../2Periodo/Condicionales/Modulo.php">Punto 1</a></li>
                                    <li><a href="../../2Periodo/Condicionales/Numero0.php">Punto 2</a></li>
                                    <li><a href="../../2Periodo/Condicionales/NumeroPN.php">Punto 3</a></li>
                                    <li><a href="../../2Periodo/Condicionales/NumOrden.php">Punto 4</a></li>
                                    <li><a href="../../2Periodo/Condicionales/Restaurante.php">Punto 5</a></li>
                                </ul>
                                <a>Quiz</a>
                                <ul>
                                    <li><a href="../../2Periodo/quiz/Punto 1.php">Punto 1</a></li>
                                    <li><a href="../../2Periodo/quiz/Punto 2.php">Punto 2</a></li>
                                    <li><a href="../../2Periodo/quiz/Punto 3.php">Punto 3</a></li>
                                </ul>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">3er Periodo</span>
                            <ul>
                                <a>Actividad 1</a>
                                <ul>
                                    <li><a href="../../3Periodo/Arrays/Punto 1.php">Punto 1</a></li>
                                    <li><a href="../../3Periodo/Arrays/Punto 2.php">Punto 2</a></li>
                                    <li><a href="../../3Periodo/Arrays/Punto 3.php">Punto 3</a></li>
                                    <li><a href="../../3Periodo/Arrays/Punto 4.php">Punto 4</a></li>
                                </ul>
                                <a>Actividad 2</a>
                                <ul>
                                    <li><a href="../../3Periodo/Arrays 2/Notas.php">Punto 1</a></li>
                                    <li><a href="../../3Periodo/Arrays 2/Tareas.php">Punto 2</a></li>
                                    <li><a href="#">Punto 3</a></li>
                                    <li><a href="#">Punto 4</a></li>
                                </ul>
                                <a>Actividad 3</a>
                                <ul>
                                    <li><a href="../../3Periodo/Frontend/Principal.html">Punto 1</a></li>
                                </ul>
                                <a>Quiz</a>
                                <ul>
                                    <li><a href="../../3Periodo/Quiz/Punto 1.php">Punto 1</a></li>
                                    <li><a href="../../3Periodo/Quiz/Punto 2.php">Punto 2</a></li>
                                    <li><a href="../../3Periodo/Quiz/Punto 3.php">Punto 3</a></li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <!-- Section -->


                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">&copy; 2023-2024 | Sebastian Aguirre Oyola</p>
                </footer>

            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/browser.min.js"></script>
    <script src="../../assets/js/breakpoints.min.js"></script>
    <script src="../../assets/js/util.js"></script>
    <script src="../../assets/js/main.js"></script>

</body>

</html>
