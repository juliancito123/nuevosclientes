<?php
include('../config/config.php');
include('clientes.php');
$p = new clientes();
$data = mysqli_fetch_object($p->getOne($_GET['id']));;


if (isset($_POST) && !empty($_POST)){
   
            $update = $p->update($_POST);
            if ($update){
                $error = '<div class="alert alert-success" role="alert">Paciente modificado correctamente</div>';
              }else{
                $error = '<div class="alert alert-danger" role="alert" > Error al modificar un paciente </div>';
              }
}

?>
<!DOCTYPE html>
<html>

    </head>
<meta charset="UTF-8">
    <title>nuevosclientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>

    <body>
        <?php include('menuAdmin.php') ?>
        <div class="container">
            <?php
            if (isset($error)){
                echo $error;
            }
?>
<h2 class="text-center mb-5">Modificar cliente </h2>
<form method="POST" enctype="multipart/form-data">
        <div class="row mb-2">
            <div class="col">

                <input type="text" name="firsName" id="firsName" placeholder= "nombres" require class="form-control" value="<?= $data->firsName ?>"  />
                <input type="hidden" name="id" id="id" class="form-control" value="<?= $data->id ?>"  />
</div>
<div class="col">
    <input type="text" name="Direction" id="Direction" placeholder="Direccion"require class="form-control" value="<?= $data->Direction ?>"  />
</div>
</div>

<div class="row mb-2">
    <div class="col">
        <input type="email" name="email" id="email" placeholder="Email" require class="form-control" value="<?= $data->email ?>"  />
</div>
<div class="col">
    <input type="number" name="phone" id="phone" placeholder="Numero Celular" require class="form-control" value="<?= $data->phone ?>"  />
</div>
</div>

<div class="row mb-2">
    <div class="col">
        <input type="text" name="servicio" id="servicio" placeholder="servicio requerido" require class="form-control" value="<?= $data->servicio ?>" /> 
</div>

<button>Editar</button>
</div>

            </body>

            <html>











