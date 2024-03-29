<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patitas SV</title>

    <!-- Fuente de letra Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <!-- Fuentes de CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Iconos de redes sociales -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Icono de Pestaña -->
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <!--Fuentes de JS-->
    <script defer src="./main.js"></script>
</head>

<body>
    <!-- Barra de navegación -->
    <header>
        <nav>
            <div class="logo">
                <img src="img/logo.png" alt="ImagenTemporal">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php" class="items">INICIO</a></li>
                    <li><a href="patitassv.php" class="items">SOBRE NOSOTROS</a></li>
                    <li><a href="ayuda.php" class="items">AYUDA</a></li>
                        <li><a href="adopta.php" class="items">ADOPTA</a></li> 
                </ul>
            </div>
        </nav>
    </header>
    
    <div class="fondo">
        <div class="fondoEncima">
            <div class="cajita">
                <div class="letra" style="text-align: center;">
                    <h4>NUESTRA HISTORIA</h4>
                    <P class="parrafo"> <br> Todo comenzó con un grupo de 6 amigas que se preocupaban por la vida de los
                        animales sin hogar.
                        Un dia una de ellas llamada Jeymi encontro cerca de su casa a un perrito con su pata quebrada.
                        Jeymi decidió llevarlo a su casa y le contó la situación a las demás, entre todas colaboraron para que
                        el perrito
                        recuperara su salud, más tarde el perrito fue dado en adopción, después de esa experiencia se queria
                        lograr más rescates.
                        En los siguientes 6 meses se logró rescatar otro perrito y un gatito de la calle, los rescates se
                        convirtieron en una misión
                        que no podiamos abandonar, al ver la gran necesidad por la que pasan miles de animalitos por lo que se
                        inició el proyecto del refugio,
                        todas las fundadoras proveyeron lo necesario para un albergue. Melissa ofrecio una casita para llevar a
                        los animalitos rescatados, Yanci,
                        Karla, Gabriela, Andrea y Jeymi ayudaron a llevar lo necesario para que el lugar fuera apto, de esa
                        manera nació lo que hoy se conoce como
                        "PATITAS EL SALVADOR".
                    </P>
                    <br>
                </div>        
            </div>   
            
            <div class="letra2" style="text-align: center;">
                <h4>CONOCE A LAS FUNDADORAS</h4>
                <br>
            </div>
        
            <div class="contenedor">
                <div class="caja">            
                    <h4>Melissa</h4>
                    <div id="contenido" style="display: none;">
                        <img src="./img/Melissa.jpg" alt="Melissa">
                    </div>            
                    <button onclick='muestra_oculta("contenido")' class="btn btn-primary" form="contenido">Ver</button>
                </div>
        
                <div class="caja">            
                    <h4>Jeymi</h4>
                    <div id="contenido1" style="display: none;">
                        <img src="./img/Jeymi.jpg" alt="Jeymi">
                    </div>
                    <button onclick='muestra_oculta("contenido1")' class="btn btn-primary" form="contenido1">Ver</button>
                </div>
        
                <div class="caja">            
                    <h4>Karla</h4>
                    <div id="contenido2" style="display: none;">
                        <img src="./img/Karla.jpg" alt="Karla">
                    </div>
                    <button onclick='muestra_oculta("contenido2")' class="btn btn-primary" form="contenido2">Ver</button>
                </div>
        
                <div class="caja">            
                    <h4>Andrea</h4>
                    <div id="contenido3" style="display: none;">
                        <img src="./img/Andrea.jpg" alt="Andrea">
                    </div>
                    <button onclick='muestra_oculta("contenido3")' class="btn btn-primary" form="contenido3">Ver</button>
                </div>
        
                <div class="caja">            
                    <h4>Yancy</h4>
                    <div id="contenido4" style="display: none;">
                        <img src="./img/Yancy.jpg" alt="Yancy">
                    </div>
                    <button onclick='muestra_oculta("contenido4")' class="btn btn-primary" form="contenido4">Ver</button>
                </div>
        
                <div class="caja">            
                    <h4>Gabriela</h4>
                    <div id="contenido5" style="display: none;">
                        <img src="./img/Gabriela.jpg" alt="Gabriela">
                    </div>
                    <button onclick='muestra_oculta("contenido5")' class="btn btn-primary" form="contenido5">Ver</button>
                </div>
                </div>
        
                <div class="cajita">
                    <div class="letra" style="text-align: center;">
                    <h4>Visitanos</h4>
                    <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d992407.8637696853!2d-89.94582048749999!3d13.68248149999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f633bd348a1d435%3A0x4cb53709367c055f!2sREFUGIO%20HUELLITAS%20DE%20AMOR!5e0!3m2!1ses-419!2ssv!4v1706213182937!5m2!1ses-419!2ssv" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <br><br>
                    <h4>Contáctanos y siguenos en nuestras redes sociales</h4>
                    <br>
                    <img src="img/flecha.gif" alt="Flecha" style="width: 150px;">
                </div>
            </div>
        </div>
    </div>    

    <!-- Pie de Página -->
    <footer>
        <div class="contenedor-pie">
            <a href="#" target="_blank">
                <div class="fa-brands fa-facebook"></div>
            </a>
            <a href="#" target="_blank">
                <div class="fa-brands fa-instagram"></div>
            </a>
            <a href="#" target="_blank">
                <div class="fa-brands fa-tiktok"></div>
            </a>
            <a href="#" target="_blank">
                <div class="fa-brands fa-youtube"></div>
            </a>
            <a href="https://wa.me/50377778888" target="_blank">
                <div class="fa-brands fa-whatsapp"></div>
            </a>
        </div>
    </footer>
</body>
</html>