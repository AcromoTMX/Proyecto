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
                        
                        <form method="POST">
        <label for="ingles">Ingrese su nota de Ingles: </label>
        <input type="number" name="ingles" id="ingles">
        <br>
        <label for="tec">Ingrese su nota de Tecnologia: </label>
        <input type="number" name="tec" id="tec">
        <br>
        <label for="mate">Ingrese su nota de Matematicas: </label>
        <input type="number" name="mate" id="mate">
        <br>      
        <input type="submit" value="Determinar">
    </form>
    <br>
     <h2>ingles</h2>
     <br>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ingles = $_POST["ingles"];

        if ($ingles >= 90) {
            echo "Excelente, tu nivel de ingles excede las expectativas implementadas por la institución";
        } elseif ($ingles >= 80 && $ingles <= 89) {
            echo "Buen trabajo, tus conocimientos son puntuales y sabes ponerlo en practica, recomendamos entrenar la pronunciación";
        } elseif ($ingles >= 70 && $ingles <= 79) {
            echo "Aprobado, debe practicar la gramatica y pronunciación, recomendamos leer textos y escuchar audios en ingles para esto";
        } elseif ($ingles < 70) {
            echo "Desaprobado, el estudiante no habla de manera constante, le cuesta recordar palabras y formas gramaticales, recomendamos practicar 1 hora diaria";
        }
        }
    ?>
    <br>
     <h2>tecnologia</h2>
     <br>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tecno = $_POST["tec"];

        if ($tecno >= 90) {
            echo "Excelente, tu nivel en practica excede las expectativas implementadas por la institución";
        } elseif ($tecno >= 80 && $tecno <= 89) {
            echo "Buen trabajo, tus conocimientos son puntuales y sabes ponerlo en practica, recomendamos probar a tomar alternativas";
        } elseif ($tecno >= 70 && $tecno <= 79) {
            echo "Aprobado, debe organizar su codigo y ampliar el uso de etiquetas, recomendamos analizar distintos codigos";
        } elseif ($tecno < 70) {
            echo "Desaprobado, el estudiante no recuerda etiquetas o condicionales, recomendamos ver videos explicatorios";
        }
    }
    ?>
    <br>
     <h2>matematicas</h2>
     <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mate = $_POST["mate"];

        if ($tecno >= 90) {
            echo "Excelente, tu nivel de solución excede las expectativas implementadas por la institución";
        } elseif ($tecno >= 80 && $tecno <= 89) {
            echo "Buen trabajo, sabe solucionar problemas veloces, pero debe examinar la pecision";
        } elseif ($tecno >= 70 && $tecno <= 79) {
            echo "Aprobado, ciertas formas de trabajo son complejas para el estudiante, se recomiendo estudiarlas";
        } elseif ($tecno < 70) {
            echo "Desaprobado, el estudiante no es capaz de resolver las practicas, es recomendado practicar";
        }
    }
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

