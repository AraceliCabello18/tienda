function agregarNuevaRopa() {

}

function eliminarRopa(){
    swal({
        title: "Estas seguro de eliminar esta Ropa?",
        text: "Una vez eliminada, no podra recuperarse el registro!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            
        } 
    });
}