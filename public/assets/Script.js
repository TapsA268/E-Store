//Mostrar contraseñas
function mostrarPass(){
    var tipo = document.getElementById("inputPassword");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}

//Popover 

document.addEventListener('DOMContentLoaded', function () {
    var popovers = new bootstrap.Popover(document.body, {
        selector: '[data-bs-toggle="popover"]',
        trigger: 'click',
        placement: 'top',
    });
});

//Buscador
var buscador=$("#tabla").DataTable();
$("#input-buscar").keyup(function(){
    buscador.search($(this).val()).draw();
    if($("#input-buscar").val()==""){
        $(".content-search").fadeOut(300);
    }else{
        $(".content-search").fadeIn(300);
    }
});
