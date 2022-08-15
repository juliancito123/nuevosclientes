<?php
include('../config/config.php');
include('clientes.php');
$p = new clientes();

$allclientes = $p->getALL();

if(isset($_GET['id']) && !empty($_GET['id'])){
   $remove = $p->remove($_GET['id']);
   if ($remove) {
   header('location' . ROOT . 'clientes/index.php');
   } else {
   $msj = " <div class= 'alert alert-danger' rol='alert' > Error al elinar agenda. </div> ";
}    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>


<body>
<?php include('menuAdmin.php') ?>
<div class="container"> 
   <h2 class="text-center mb-5">Lista de Clientes</h2>
</div>
<div class="row">
    <?php
    while ($clientes = mysqli_fetch_object($allclientes)){
       
      echo "<div class='col-6'>";
      echo "<div class='border border-info p-2'>";
        echo "<h5> Nombre: $clientes->firsName </h5>   ";
        
        echo " <p> <b>Direccion:</b> $clientes->Direction    </p> ";
        echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/clientes/edit.php?id=$clientes->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/clientes/index.php?id=$clientes->id' >Eliminar</a> </div>";
        echo " </div> ";
        echo "</div>";

    }
?>
</div>
</body>
</html>