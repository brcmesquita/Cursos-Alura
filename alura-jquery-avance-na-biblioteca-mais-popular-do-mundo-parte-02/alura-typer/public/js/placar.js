$("#botao-placar").click(mostrarPlacar);
//console.log($("botao-placar").click(mostrarPlacar))
$("#botao-sync").click(sincronizarPlacar);

function inserePlacar() {
    var corpoTabela = $(".placar").find("tbody");
    var usuario = "Raphael"
    var numPalavras = $("#contador-palavras").text();

    var linha = novaLinha(usuario, numPalavras);
    linha.find(".botao-remover").click(removeLinha);

    corpoTabela.prepend(linha);
    $(".placar").slideDown(500);
    scrollPlacar();
}

function scrollPlacar(){
    var posicaoPlacar = $(".placar").offset().top;
    $("body").animate(
        {
            scrollTop: posicaoPlacar + "px"
        }, 1000);
}

function novaLinha(usuario, palavras) {
    var linha = $("<tr>");
    var colunaUsuario = $("<td>").text(usuario);
    var colunaPalavras = $("<td>").text(palavras);
    var colunaRemover = $("<td>");

    var link = $("<a>").addClass("botao-remover").attr("href", "#");
    var icone = $("<i>").addClass("small").addClass("material-icons").text("delete");

    link.append(icone);

    colunaRemover.append(link);

    linha.append(colunaUsuario);
    linha.append(colunaPalavras);
    linha.append(colunaRemover);

    return linha;
}

function removeLinha() {
    event.preventDefault();
    // $(this).parent().parent().remove();
    // $(this).parent().parent().fadeIn();
    $(this).parent().parent().fadeOut();
    // $(this).parent().parent().fadeToggle();
}

function mostrarPlacar() {
    //console.log("má oi!");
    //$(".placar").show();
    //$(".placar").toggle();
    //$(".placar").slideDown(2000);
    //$(".placar").slideUp(2000);
    // $(".placar").slideToggle(600);
    $(".placar").stop().slideToggle(600);
}

function sincronizarPlacar() {
    var placar = [];
    var linhas = $("tbody>tr");
    linhas.each(function() {
        var usuario = $(this).find("td:nth-child(1)").text();
        var palavras = $(this).find("td:nth-child(2)").text();
    
        var score = {
            usuario: usuario,
            pontos: palavras
        };

        placar.push(score);
    })

    var dados = {
        placar: placar
    };

    $.post("http://localhost:3000/placar", dados, function(){
        console.log("Salvou o placar no servidor");
    });
}

function atualizarPlacar(){
    $.get("http://localhost:3000/placar", function(data){
    $(data).each(function(){
        var linha = novaLinha(this.usuario, this.pontos);
        linha.find(".botao-remover").click(removeLinha);     
        $("tbody").append(linha);
    })
});
}