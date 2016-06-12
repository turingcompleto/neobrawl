<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro | Neobrawl</title>
</head>

<body>
<div class="se-pre-con"></div>
    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-default">
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
        <div class="row contenido1">
            <div class="container">
                <div class="col-md-6">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#informacion" data-toggle="tab" aria-expanded="true">Información</a>
                        </li>
                        <li class=""><a href="#reglas" data-toggle="tab" aria-expanded="false">Reglas</a>
                        </li>
                        <!--    <li class=""><a href="#ranking" data-toggle="tab" aria-expanded="false">Ranking</a>
                        </li>
                        <li class=""><a href="#ganadores" data-toggle="tab" aria-expanded="false">Ganadores</a>
                        </li>-->
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="informacion">
                           
                                <ul>
                                    <li>Costo: GRATIS</li>
                                    <li>Lugar: Frente a las canchas de FES Acatlan.</li>
                                    <li><a href="ubicacion.html" class="">Aquí</a> puedes ver la sede</li>
                                    <li>Día: Viernes 5 de Febrero.</li>
                                    <li>Hora de inicio: 1:10 pm.</li>
                                    <li>Cupo: 32 participantes.</li>
                                    <li><strike>Pago: 2 y 3 de Febrero</strike></li>
                                </ul>
                                <small><strike>El dinero se cobrara frente al edificio A4 (en las jardineras). El horario de Pago será de 1:00 pm a 1:30pm.  Todo aquel que se registre y no page dentro de  la fecha  será dado de baja del registro</strike></small>

                            <a href="#" class="btn btn-link">Ver más...</a>
                        </div>
                        <div class="tab-pane fade" id="reglas">
                           
                                <ul>
                                    <li>Cada participante traerá su control ó 3DS</li>
                                    <li>Modo Doble Eliminación. </li>
                                    <li>Cada Enfrentamiento tiene 2 batallas. </li>
                                    <li>2 Ganadas, pasa a otro enfrentamiento. </li>
                                    <li>2 Pérdidas, pasa a la otra llave. </li>
                                    <li>1 ganada y otra pérdida entonces una batalla más para decidir al ganador. </li>
                                    <li>Stock 2 Vidas. </li>
                                    <li>Ítems Desactivados. </li>
                                    <li>Escenarios No Intrusivos<small><a href="stage.html" class=""> (ver lista)</a></small></li>
                                    <li>Tiempo Límite 8 Minutos. </li>
                                    <li>Pausa Deshabilitada. </li>
                                    <li>La eleccion del escenario queda por acuerdo por los combatientes. </li>
                                </ul>
                         
                            <a href="#" class="btn btn-link">Ver más...</a>
                        </div>
                    </div>
                </div>
                <!--El siguiente script valida si el numero de participantes no excede los limites establecidos, de lo contario llena las variables para cambiar el estado de lo que se muestra-->
                <?php
               include('validacion1.php');
                ?>
                    <div class="col-md-5">
                       <!--los datos de registro se envian por POST a este mismo archivo-->
                        <form class="form-horizontal" action="registro.php" method="post">
                            <fieldset>
                                <legend>Registro
                                    <h6 class="text-primary"><?php echo $mensaje ?></h6>
                                    <!--la variable $mensaje muestra un mensaje de notificacion para los usuarios de acuerdo al valor de su registro-->
                                    </legend>
                                <div class="form-group <?php echo $clasee ?>">
                                   <!--la variable clase cambia el valor de una clase definida en CSS para cambiar los colores en caso de tener un error o un acierto en el registro-->
                                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10">
                                        <input type="email" class="form-control" id="inputEmail" name="mail" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="form-group <?php echo $clasen ?>">
                                    <label for="nick" class="col-lg-2 control-label">Nick</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="nick" name="nick" placeholder="Nick" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button type="reset" class="btn btn-primary">Cancelar</button>
                                        <button type="submit" class="btn btn-info" <?php echo $clase ?>>Registrar</button>
                                        <!--esta variable $clase lo que hace es poner un disabled o enabled en el formulario dependiendo del numero de registrados-->
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
            </div>
        </div>
        <div class="container">
            <!-- Modal que muestra el mensaje inicial para el ingreso al grupo de facebook-->
            <div class="modal  in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" onclick="$('.modal').hide()" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Grupo de facebook</h4>
                        </div>
                        <div class="modal-body">
                            <h3>Ingresa al <a href="https://www.facebook.com/groups/1418559165123330/" target="_blank">grupo de facebook</a> para más detalles</h3>
                            <img src="https://dl.dropboxusercontent.com/u/59014851/smash.jpg" alt="" class="img img-responsive">
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="$('.modal').hide()" class="btn btn-default" data-dismiss="modal">Cerrar</button>
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