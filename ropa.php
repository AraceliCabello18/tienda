
<?php include "header.php"; ?>

<!-- Page Content -->
<div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">
    <h1 class="font-weight-light">Administracion de Ropa</h1>
    <span class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarRopa">
        Agregar nueva Ropa
    </span>
    <hr>
    <div id="tablaRopaLoad"></div>
    <div style="height: 700px"></div>
    <p class="lead mb-0">You've reached the end!</p>
    </div>
</div>
</div>

<?php
    include "vistas/ropa/modalAgregar.php";
    include "vistas/ropa/modalActualizar.php";
?>

<?php include "footer.php"; ?>
<script src="librerias/js/ropa.js"></script>

<script>
    $(document).ready(function(){
        $('#tablaRopaLoad').load('vistas/ropa/tablaRopa.php');
    });
</script>
