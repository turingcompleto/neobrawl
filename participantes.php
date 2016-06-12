<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Participantes | Neobrawl</title>
</head>

<body>
<div class="se-pre-con"></div>
    <div class="container-fluid">
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
        <div class="container">
            <div class="row lol">
                <div class="col-md-12">
                    <blockquote class="pull-left">
                        <h1 class="text-primary">"I hope she made lotsa spaghetti"</h1>
                        <small>Luigi Bros. in <cite title="Source Title">Internet meme</cite></small>
                    </blockquote>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h1 class="tituloprimario">Participantes</h1>
                                </div>
                                <!--Se crea la tabla de los participantes y con nuestro script en php vamos a iterar sobre cada participante registrado en nuestra base de datos para que se muestre en pantalla-->
                                <table class="table table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>No. de llegada</th>
                                            <th>Nick</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include( 'consulta2.php'); ?> 
                                        <!--Script con la estructura:
                                          <tr><td>ID</td><td>No. de llegada</td><td>Nick</td>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <footer class="footer footer-fixed-bottom pie">
        <div class="container">
            <p class="text-muted text-right">Sitio Creado por <a href="#">Luis Ricardo Vallejo Gutierrez</a> Enero 2016
            </p>
        </div>
    </footer>

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>

	$(window).load(function() {

		$(".se-pre-con").fadeOut("slow");;
	});
    </script>
</body>

</html>