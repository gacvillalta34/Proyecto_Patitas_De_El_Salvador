<?php
// Conexión de la base de datos
include 'conexion.php';

// Procesar el formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se han enviado los datos del formulario
    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['genero']) && isset($_POST['correo']) && isset($_POST['numero']) && isset($_POST['direccion']) && isset($_POST['animal'])) {
        // Procesar datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $telefono = $_POST['numero'];
        $direccion = $_POST['direccion'];

        // Verificar el género seleccionado
        if (isset($_POST['genero'])) {
            $genero = $_POST['genero'];
        }
        
        // Verificar el animal a adoptar
        if (isset($_POST['animal'])) {
            $tipo_animal = $_POST['animal'];
        }

        // Insertar datos en la tabla "Personas"
        $sql_personas = "INSERT INTO tbl_persona (nombres, apellidos, genero, direccion, correo, telefono) VALUES ('$nombre', '$apellido', '$genero', '$direccion', '$correo', '$telefono')";
        
        if (mysqli_query($conexion, $sql_personas)) {
            // Obtener el ID generado para la persona insertada
            $id_persona = mysqli_insert_id($conexion);

            // Insertar datos en la tabla "Ayuda"
            $sql_ayuda = "INSERT INTO tbl_adopcion (tipo_animal, id_persona) VALUES ('$tipo_animal', '$id_persona')";

            if (mysqli_query($conexion, $sql_ayuda)) {
                // Mostrar mensaje emergente
                echo "<script>alert('Los datos han sido enviados exitosamente, nuestro equipo se comunicará con usted');</script>";
                echo '<script> window.location="ayuda.php"; </script>';
            } else {
                echo "Error al insertar datos: " . mysqli_error($conexion);
            }
        } else {
            echo "Error al insertar datos en el formulario: " . mysqli_error($conexion);
        }
    } else {
        echo "Por favor, completa todos los campos del formulario.";
    }
}
?>


<!DOCTYPE html>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Icono de Pestaña -->
        <link rel="icon" href="img/logo.png" type="image/x-icon">

        <!-- Cambiar cursor en los radio buttons -->
        <style>
            input[type="radio"], label[for="masculino"], label[for="femenino"], label[for="perro"], label[for="gato"] {
                cursor: pointer; 
            }
        </style>

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

        <!-- Primera Sección -->
        <div class="fondo">
            <div class="fondoEncima">
                <section>
                    <div class="primertexto">
                        <div>
                            <h1 class="titulo2">¿Cómo puedo adoptar?</h1>
                            <br>
                        </div>
                        <div class="letra3">
                            <h2>LLENA ESTE FORMULARIO Y NUESTRO EQUIPO SE CONTACTARA CONTIGO</h2>
                        </div>
                    </div>
                    <!-- Formulario -->
                    <section id="formulario">            
                        <div>
                            <form method="post">
                                <table>
                                    <tr>
                                        <td><label for="nombre">Nombres: </label><br><br></td>
                                        <td><input type="text" id="nombre" maxlength="100" required name="nombre"><br><br></td>
                                    </tr>
                                    <tr>
                                        <td><label for="apellido">Apellidos: </label><br><br></td>
                                        <td><input type="text" id="apellido" maxlength="100" required name="apellido"><br><br></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="genero">Género: </label><br><br>
                                        </td>    
                                        <td>
                                           <input type="radio" id="masculino" name="genero" value="Masculino">
                                           <label for="masculino">Masculino</label>                                            
                                           &nbsp;&nbsp;
                                           <input type="radio" id="femenino" name="genero" value="Femenino">
                                           <label for="femenino">Femenino</label>
                                           <br><br>
                                        </td>                                    
                                    </tr>
                                    <tr>
                                        <td><label for="direccion">Dirección: </label><br><br></td>
                                        <td><input type="text" id="direccion" maxlength="150" required name="direccion"><br><br></td>
                                    </tr>
                                    <tr>
                                        <td><label for="correo">Correo: </label><br><br></td>
                                        <td><input type="email" id="correo" maxlength="100" required name="correo"><br><br></td>
                                    </tr>
                                    <tr>
                                        <td><label for="numero">Número: </label><br><br></td>
                                        <td><input type="text" id="numero" maxlength="15" required name="numero"><br><br></td>
                                    </tr> 
                                    <tr>
                                        <td colspan="2">
                                            <label for="genero">¿Qué deseas adoptar? </label><br><br>
                                        </td>                                                                             
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="radio" id="perro" name="animal" value="Perro">
                                            <label for="perro">Perro</label>                                            
                                            &nbsp;&nbsp;
                                            <input type="radio" id="gato" name="animal" value="Gato">
                                            <label for="gato">Gato</label>
                                            <br><br>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="alinearBoton">
                                                <input type="submit" value="Enviar" class="boton">
                                            </div>
                                        </td>
                                    </tr>                               
                                </table>   
                            </form>
                        </div>
                    </section>
                </section> 
                </section>
            </div>
        </div>

        <!-- Pie de Página -->
        <footer>
            <div class="contenedor-pie">
                <a href="#" target="_blank"><div class="fa-brands fa-facebook"></div></a>
                <a href="#" target="_blank"><div class="fa-brands fa-instagram"></div></a>
                <a href="#" target="_blank"><div class="fa-brands fa-tiktok"></div></a>
                <a href="#" target="_blank"><div class="fa-brands fa-youtube"></div></a>
                <a href="https://wa.me/50377778888" target="_blank"><div class="fa-brands fa-whatsapp"></div></a>
            </div>
        </footer>
    </body>
</html>