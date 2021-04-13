let editar = $("#btn-edit");
let deletar = $("#btn-delete");
let save = $("#btn-save");
editar.on("click", (event) => {

    event.preventDefault();
    
    $("#btn-edit").hide();
    $("input").prop("disabled", false);
    $("#btn-save").removeClass("off");

});


deletar.on("click", () =>{



});

save.on("click", (event) => {

    event.preventDefault();

    alert("teste");
    // swal({
    //     title: "Atenção!",
    //     text: "Clique no botão para ser redirecionado!",
    //     icon: "warning",
    //     buttons: true,
    // }).then(function(result) {
    //     if (result) {
    //     alert("Coloque aqui o window.location.href");
    //     } else {
    //     alert("Você não será redirecionado pois clicou em \"Cancel\"");
    //     }
    // });
});


