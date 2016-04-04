<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="../../includes/css/css_bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>

        <script src="../../includes/js/jquery/jquery-1.12.1.min.js" type="text/javascript"></script>
        <script src="../../includes/js/bootstrap/bootstrap.js" type="text/javascript"></script>
        <script src="vistapruebamvc.js" type="text/javascript"></script>




        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section>
        <div class="containerç">
            <form name="frm1" id="frm1" class="form-horizontal" onSubmit="return false">
                <input type="hidden" name="proceso" id="proceso" value="" />
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3 class="panel-title"><strong>Datos Generales</strong></h3></div>
                    <div class="panel-body">

                        <div class="row form-group form-group-sm">
                            <div class="col-sm-1"><label>Nombre:</label></div>
                            <div class="col-sm-5">                                          
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" />
                            </div>     
                        </div>

                        <div class="row form-group form-group-sm">
                            <div class="col-sm-1"><label>Apellidos:</label></div>
                            <div class="col-sm-5">                                          
                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" />
                            </div>     
                        </div>

                        <div class="row form-group form-group-sm">
                            <div class="col-sm-1"><label>Correo:</label></div>
                            <div class="col-sm-5">                                          
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" />
                            </div>     
                        </div>

                        <div class="row form-group form-group-sm">
                            <div class="col-sm-1"><label>Telefono:</label></div>
                            <div class="col-sm-5">                                          
                                <input type="email" class="form-control" id="telefono" name="telefono" placeholder="Telefono" />
                            </div>     
                        </div>

                        <div class="row form-group form-group-sm">
                            <div class="col-sm-1"><label>Salario:</label></div>
                            <div class="col-sm-5">                                          
                                <input type="email" class="form-control" id="salario" name="salario" placeholder="Salario" />
                            </div>     
                        </div>       

                    </div>
                </div>
                
                
                <div align="center">
                    <button type="button" class="btn btn-default btn-sm" name="limpiar" id="limpiar">
                    <span class="glyphicon glyphicon-search"></span>Limpiar</button>
                    <button type="button" class="btn btn-primary btn-sm" name="enviar" id="enviar">
                    <span class="glyphicon glyphicon-search"></span>Guardar</button>
                </div>
                
                <div id="mensaje">
                </div>
                

            </form>
        </div>
        </section>

    </body>
</html>