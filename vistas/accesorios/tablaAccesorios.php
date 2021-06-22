<div class="table-responsive">
    <table class="table table-condensed table-hover" id="AccesoriosDataTable">
        <thead>
            <th>Modelo</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <span class="btn btn-warning" data-toggle="modal" data-target="#modalActualizarAccesorios">
                        Editar
                    </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminarRopa()" >Eliminar</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#AccesoriosDataTable').DataTable();
    });
</script>