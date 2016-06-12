<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- viewport es necesario para reconocer la resolcion del dispositivo de donde se accede al sitio-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!--Se carga bootstrap, que es un  framework de CSS con clases ya definidas para agilizar el maquetado y diseño-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Style es una hoja de CSS personal donde se hacen ligeras modificaciones a los estilos de bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <!--los siguientes links son las apis de google fonts que sirven para tener fuentes en el proyecto-->
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Inconsolata:700' rel='stylesheet' type='text/css'>
    <title>Registro | Neobrawl</title>
</head>
<body>
   <div class="se-pre-con"></div> <!--contenedor con la clase necesaria para hacer el loader del cubo rubik-->
    <header>
       <!-- este es una barra  de navegación definida con las clases de bootstrap, por ejemplo navbar-fixed-top es una clase de css que indica que se quede fija la barra en la parte superior de la pantalla-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                   <!--aqui se indica que cuando pase a una resolución menor se active un boton tipo hamburguesa para navegar por el menu -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu1" aria-expanded="false">
                        <span class="sr-only">Navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Torneo de SSBWIIU</a>
                </div>

                <div class="collapse navbar-collapse" id="menu1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Inicio</a>
                        </li>
                        <li><a href="participantes.php">Participantes</a>
                        </li>
                        <li><a href="stage.html">Stages</a>
                        </li>
                        <li><a href="ubicacion.html">Ubicación</a>
                        </li>
                        <li><a href="registro.php">Registro</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://www.facebook.com/groups/1418559165123330/?fref=ts">Grupo Facebook</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav><!--termina el menu de navegacion-->
    </header>
    <div class="container-fluid main"> <!--este div va a contener todo lo que esta por debajo del menu de navegacion, la clase container-fluid crea un margen de 100% en la pantalla y por otro lado la clase container crea un margen de 80% -->
        <center>
           <!--Aqui se puede observar el sistema de grids de bootstrap. lo que hace este sistema es dividir todos los contenedores en 12 partes por lo que trabajar con las medidas es mucho mas facil.-->
            <div class="col-md-5 col-xs-5">
                <img src="img/Lucina_SSB4.png" alt="" class="img img-responsive image">
            </div>
            <div class="col-md-7 col-xs-12 col-sm-6">
               <!-- la siguiente parte pertenece al efecto de maquina de escribir, desarrollado en javascript, CSS y dos librerias, Typed.js y Jquery -->
                <div class="type-wrap typedtitle">
                    <h1 style="color:white; font-family: 'Bangers', cursive;">¡GRAN TORNEO DE SMASH BROS!</h1>
                    <div id="typed-strings">
                        <p>Los <strong> mejores</strong> jugadores</p>
                        <p>35 <strong>participantes</strong> </p>
                        <p>un solo <strong> ganador</strong></p>
                        <p>¿Aceptas el <strong>reto</strong> ?</p>
                    </div>
                    <span id="typed" style="white-space:pre;"></span><!--este es el curso que parpadea-->
                </div> <!--Termina el uso de typed.js-->
            </div>
        </center>
    </div>

    <footer class="footer footer-fixed-bottom pie">
        <div class="container">
            <p class="text-muted text-right">Sitio Creado por <a href="#">Luis Ricardo Vallejo Gutierrez</a> Enero 2016
            </p>
        </div>
    </footer>
<!--Los scripts que se utilizan para el correcto funcionamiento de Typed, Jquery y Bootstrap-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/typed.js" type="text/javascript"></script>

    <script>
        //Funcion que define los valores de typed.js
        $(function () {
            $("#typed").typed({
                stringsElement: $('#typed-strings'),
                typeSpeed: 20,
                backDelay: 1500,
                loop: true, //puede cambiar a false y determinar con loopCout cuantas veces se quiere repetir la secuencia definida.
                contentType: 'html',
                loopCount: false,
                callback: function () {
                    foo();
                },
                resetCallback: function () {
                    newTyped();
                }
            });
            $(".reset").click(function () {
                $("#typed").typed('reset');
            });
        });

        function newTyped() {}

        function foo() {
            console.log("Callback");
        }
    </script>
    <!-- se llama a la libreria modernizr para hacer el loader más sencillo de implementar. -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>
        //Funcion para cargar la pagina y mostrar el efecto de fadeout cuando esta ya este cargada
        $(window).load(function () {
            // Animacion del loader a traves de la clase definida en la parte superior, se-pre-con
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
</body>
</html>