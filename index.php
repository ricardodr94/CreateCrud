<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <div class="container" style="margin-top:30px;">
        <div class="responsive">
            <div class="row">
                 <div class="col-12">
                    <table class="table table-bordered table-hover" style="text-align:center;">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Fecha de vencimiento</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>

                            <?php
            
                                include("dataBaseConnection.php");
                          
                                $connect_db = new dataBaseConnect();
                                $listado = $connect_db->readData_db();
            
                                while ($row = mysqli_fetch_object($listado)) {
            
                                    $Id_producto = $row->Id_producto;
                                    $Nombre_producto = $row->Nombre_producto;
                                    $Descripcion_producto = $row->Descripcion_producto;
                                    $Valor_producto = $row->Valor_producto;
                                    $Fecha_venc = $row->Fecha_venc;
                                    $Imagen_producto = $row->Imagen_producto;
            
                            ?>
                            <tr class="">
                              <th scope="row"><?php echo  $Id_producto;?></th>
                              <td><?php echo  $Nombre_producto;?></td>
                              <td><?php echo  $Descripcion_producto;?></td>
                              <td><?php echo  $Valor_producto;?></td>
                              <td><?php echo  $Fecha_venc;?></td>
                              <td><?php echo  $Imagen_producto;?></td>
                              <td></td>
                            </tr>
                           <?php
                           }
                            ?>
                        </tbody>
                   </table>
                 </div>
            </div>
        </div>   
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>