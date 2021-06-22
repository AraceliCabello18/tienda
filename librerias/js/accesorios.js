function agregarAccesorio(){
    
}

function eliminarAccesorio(){
    swal({
        title: "Estas seguro de eliminar este Accesorio?",
        text: "Una vez eliminado, no podra recuperarse el registro!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            
        } 
    });
}