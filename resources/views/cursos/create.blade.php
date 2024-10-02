<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cursos de Programación</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9; /* Fondo gris claro */
        }

        /* Estilos de header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333; /* Fondo negro */
            color: white;
            padding: 10px 20px;
        }
        header img {
            max-width: 150px;
        }

        /* Estilos de navegación */
        nav {
            background-color: #333; /* Fondo negro */
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: #ddd; /* Fondo gris claro */
            color: black;
        }

        /* Estilos de contenedor */
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff; /* Fondo blanco */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilos de imagen del curso */
        .course-image {
            text-align: center;
            margin: 20px 0;
        }
        .course-image img {
            width: 100%;
            max-width: 800px;
            border-radius: 8px;
        }

        /* Estilos de dos columnas */
        .two-columns {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        .left-column {
            flex: 1;
            margin-right: 20px;
        }
        .right-column {
            flex: 1;
        }
        .form-container {
            background-color: #f9f9f9; /* Fondo gris claro */
            padding: 20px;
            border-radius: 8px;
        }

        /* Estilos de tres columnas */
        .three-columns {
            display: flex;
            justify-content: space-between;
        }
        .column {
            flex: 1;
            margin: 0 10px;
            padding: 20px;
            background-color: #f4f4f4; /* Fondo gris claro */
            border-radius: 8px;
        }

        /* Estilos de footer */
        footer {
            background-color: #333; /* Fondo negro */
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }
        .left-column {
            flex: 1;
            margin-right: 20px;
            display: flex; /* Habilita Flexbox para la columna */
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente */
        }
        /* Estilos del botón */
        .btn-submit {
            background-color: #ec5757; /* Verde oscuro */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(24, 12, 12, 0.2);
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #a02626; /* Verde claro */
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <img src="https://laravel.com/img/logomark.min.svg" alt="Laravel Logo">
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#cursos">Cursos</a>
            <a href="#testimonios">Testimonios</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>

    <!-- Contenedor principal -->
    <div class="container">

        <!-- Imagen del curso -->
        <div class="course-image">
            <img src="https://www.shutterstock.com/image-vector/set-online-education-vector-icons-260nw-2476823457.jpg" alt="Curso de Programación" style="width:100%; max-width:800px;">
        </div>

        <!-- Dos columnas: imagen y formulario -->
        <div class="two-columns">
            <div class="left-column">
                <img src="https://cdn-icons-png.flaticon.com/512/3868/3868862.png" alt="Imagen Izquierda" style="max-width: 300px; border-radius: 10px;">
            </div>
            <div class="right-column form-container">
                <h2>Formulario de Inscripción</h2>
                <form>
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre" required><br><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>
                    <label for="telefono">Teléfono:</label><br>
                    <input type="tel" id="telefono" name="telefono" required><br><br>
                    <button type="submit" class="btn-submit">Inscribirme</button>
                </form>
            </div>
        </div>

        <!-- Tres columnas: copy, menú rápido y contacto -->
        <div class="three-columns">
            <div class="column">
                <h3>Copy</h3>
                <p>Aprende a programar con los mejores cursos. ¡Inscríbete ahora!</p>
            </div>
            <div class="column">
                <h3>Menú Rápido</h3>
                <ul>
                    <li><a href="#curso1">Php</a></li>
                    <li><a href="#curso2">Javascript</a></li>
                    <li><a href="#curso3">Java</a></li>
                </ul>
            </div>
            <div class="column">
                <h3>Contacto</h3>
                <p>Ubicación: UNIMINUTO</p>
                <p>Teléfono: (310) 422-7240</p>
                <p>Correo: contacto_de_aprendizaje@cursosprogramacion.com</p>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Cursos de Programación. Todos los derechos reservados.</p>
    </footer>

</body>
</html>