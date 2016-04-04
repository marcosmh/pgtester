<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Listado de usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script src="vista_user.js" type="text/javascript"></script>
</head>
<body>  
    <div class="container">
        <div class="col-lg-12">
            <h2 class="text-center text-primary">Agregar Usuario</h2>
            <form name="frm_user"id="frm_user" method="POST">
                
                <input type="hidden" id="proceso" name="proceso" />
                
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" name="username" value="" class="form-control" id="username" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" value="" class="form-control" id="password" placeholder="Contraseña">
                </div>
                <input type="button" name="guardar_frm" id="guardar_frm" class="btn btn-default" value="Guardar" />
            <!--/form-->
        </div>
    </div>
    
    <div class="container">
            <div class="col-lg-12">
                <h2 class="text-center text-primary">Lista de Usuario</h2>
                <div class="col-lg-1 pull-right" style="margin-bottom: 10px">
                    <a class="btn btn-info" href="">Agregar Usuario</a>
                </div>
                <?php
                
                
                
                if( ! empty( $users ) )
                {
                ?>
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Fecha</th>
                        <th>Acción</th>
                    </tr>
                    <?php foreach( $users as $user )
                    {
                    ?>
                        <tr>
                            <td><?php echo $user->id ?></td>
                            <td><?php echo $user->username ?></td>
                            <td><?php echo $user->password ?></td>
                            <td><?php echo $user->created_at ?></td>
                           
                            <td>
                                <a class="btn btn-info" href="<?php echo 1 ?>edit.php?user=<?php echo $user->id ?>">Edit</a> 
                                <a class="btn btn-info" href="<?php echo 2 ?>delete.php?user=<?php echo $user->id ?>">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                }
                else
                {
                ?>
                <div class="alert alert-danger" style="margin-top: 100px">Sin Registros</div>
                <?php
                }
                ?>
            </div>
        </div>
    
    </form>
    
    
</body>
</html>