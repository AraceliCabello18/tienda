

<?php include "header.php"; ?>

<!-- Page Content -->
<div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">
    <h1 class="font-weight-light">Administracion de Accesorios</h1>
    <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarAccesorios">
        Agregar nueva  Accesorio
    </span>
    <hr>
    <div id="tablaAccesoriosLoad"></div>
    <div style="height: 700px"></div>
    <p class="lead mb-0">You've reached the end!</p>
    </div>
</div>
</div>

<?php
    include "vistas/accesorios/modalAgregar.php";
    include "vistas/accesorios/modalActualizar.php";
?>

<?php include "footer.php"; ?>
<script src="librerias/js/accesorios.js"></script>

<script>
    $(document).ready(function(){
        $('#tablaAccesoriosLoad').load('vistas/accesorios/tablaAccesorios.php');
    });
</script>