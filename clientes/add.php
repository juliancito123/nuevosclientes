<?php
include('../config/config.php');
include('clientes.php');

if (isset($_POST)&& !empty($_POST)){
    $clientes = new clientes();


$save = $clientes->save($_POST);
     if($save){
      $error ='<div class="alert alert-success" role="alert">clientes creado correctamente</div>';
     }else{
     $error = '<div class="alert alert-danger" role="alert" > Error al crear un cliente </div>';
      }
     }

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Crear cliente </title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<head>

<body>
<?php include('../menu.php') ?>
<div class="container">
    <?php
    if (isset($error)){
echo $error;
    }
    ?>
    <h2 class="text-center mb-5" > Creacion Agenda </h2>
<form method="POST" enctype="multipart/form-data">
        <div class="row mb-2">
            <div class="col">

                <input type="text" name="firstName" id="firstName" placeholder= "Nombres" require class="form-control" />
</div>
<div class="col">
    <input type="text" name="Direction" id="Direction" placeholder="Direccion"require class="form-control" />
</div>
</div>

<div class="row mb-2">
    <div class="col">
        <input type="email" name="email" id="email" placeholder="Email" require class="form-control" />
</div>
<div class="col">
    <input type="number" name="phone" id="phone" placeholder="Numero Celular" require class="form-control" />
</div>
</div>

<div class="row mb-2">
    <div class="col">
        <input type="text" name="servicio" id="servicio" placeholder="servicio requerido" require class="form-control" /> 
</div>

<button>Registrar</button>
</div>

</body>

</html>

