<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Inconsolata:700' rel='stylesheet' type='text/css'>
    <title>Registro | Neobrawl</title>
</head>

<body>
<div class="se-pre-con"></div>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
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
                            <!--<li><a href="#">Youtube</a>
                            </li>
                            <li><a href="#">Twitter</a>
                            </li>-->
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
<div class="container-fluid main">
<center>
            <div class="col-md-5 col-xs-5">
              <img src="img/Lucina_SSB4.png" alt="" class="img img-responsive image">
            </div>
            <div class="col-md-7 col-xs-12 col-sm-6">
              <div class="type-wrap typedtitle">
                <h1 style="color:white; font-family: 'Bangers', cursive;">¡GRAN TORNEO DE SMASH BROS!</h1>
                <div id="typed-strings">
                  <p>Los <strong> mejores</strong> jugadores</p>
                  <p>35 <strong>participantes</strong> </p>
                  <p>un solo <strong> ganador</strong></p>
                  <p>¿Aceptas el <strong>reto</strong> ?</p>
                </div>
                <span id="typed" style="white-space:pre;"></span>
              </div>
            </div>
</center>
</div>        

    <footer class="footer footer-fixed-bottom pie">
        <div class="container">
            <p class="text-muted text-right">Sitio Creado por <a href="#">Luis Ricardo Vallejo Gutierrez</a> Enero 2016
            </p>
        </div>
    </footer>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/typed.js" type="text/javascript"></script>

  <script>
    $(function () {
      $("#typed").typed({
        stringsElement: $('#typed-strings'),
        typeSpeed: 20,
        backDelay: 1500,
        loop: true,
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
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
    </script>
</body>

</html>