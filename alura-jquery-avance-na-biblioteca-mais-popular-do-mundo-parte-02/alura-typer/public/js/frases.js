$("#botao-frase").click(fraseAleatoria);
$("#botao-frase-id").click(buscarFrase);

function fraseAleatoria() {
    $("#spinner").toggle();
    $.get("http://localhost:3000/frases", trocaFraseAleatoria)
    .fail(function(){
        $("#erro").show();
        setTimeout(()=>{
            $("#erro").toggle();
        }, 2000);
    })
    .always(function() {
        $("#spinner").toggle();
    });
}

function trocaFraseAleatoria(data){
    var frase = $(".frase");
    var numeroAleatorio = Math.floor(Math.random() * data.length);

    frase.text(data[numeroAleatorio].texto);
    atualizaTamanhoFrase();
    atualizaTempoInicial(data[numeroAleatorio].tempo);
}

function buscarFrase() {
    $("#spinner").toggle();
    var fraseId = $("#frase-id").val();
    var dados = { id: fraseId };
    $.get("http://localhost:3000/frases", dados, trocarFrase)
    .fail(function(){
        $("#erro").show();
        setTimeout(()=>{
            $("#erro").toggle();
        }, 2000);
    })
    .always(function() {
        $("#spinner").toggle();
    });
}

function trocarFrase(data) {

    $(".frase").text(data.texto);
    atualizaTamanhoFrase();
    atualizaTempoInicial(data.tempo);
}