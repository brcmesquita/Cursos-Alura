var tempoInicial = $("#tempo-restante").text();
// O campo de digitação é onde iremos digitar na velocidade da luz, o texto que será mostrado
var campo = $("#campo-digitacao");

//$(document).ready(function(){ // modo tradicional de chamar a função ready

//shorthand para chamar a função acima "ready"
$(function(){ 
    contadores();
    score();
    cronometro();
    mostrarPlacar();
    campo.addClass("borda-preta");
    $("#reiniciar-jogo").click(reiniciarJogo);
});

function contadores() {
    var frase = $(".frase").text();
    var tamanhoFrase = frase.split(" ").length;
    
    /* Criando a lógica do contador de palavras */ 
    var palavras = $("#qtd-palavras"); // seleciona a classe .palavras para podermos manipular
    palavras.text(tamanhoFrase); // manipulamos a classe palavra, alterando o texto interno com o tamanho em números do "tamanho frase"
}

function score() {
    /* Criando a lógica do campo de digitação */
    campo.on("input", function(){
       var conteudo = campo.val();
       
       var qtdPalavras = conteudo.split(/\S+/).length - 1;
       $("#contador-palavras").text(qtdPalavras);
    
       var qtdCaracteres = conteudo.length;
       $("#contador-caracteres").text(qtdCaracteres);
    
       //console.log(qtdPalavras);
    });
}
    

function cronometro() {
    var tempoRestante = $("#tempo-restante").text();
    campo.one("focus", function(){
        // a função "on" faz com que fique ouvindo o tempo inteiro
        // a função "one" faz com que ouça apenas uma vez e não se repita
        // qual usar? A diferença entre elas é na hora de escutar os eventos, a função .one() escuta o evento apenas uma única vez, diferentemente da função on(), que como já vimos fica escutando o evento em um elemento do HTML por tempo ilimitado.
        var timer = setInterval(function(){
            tempoRestante--;
            //console.log(tempoRestante);
            $("#tempo-restante").text(tempoRestante);
            if (tempoRestante < 1) {
                clearInterval(timer);
                finalizaJogo();
            }
        }, 1000);
    });
}

function finalizaJogo(){
    campo.attr("disabled", true);
    campo.toggleClass("campo-desativado");
    gravarPlacar();
}

var sentenca = $(".frase").text();
campo.on("input", function(){
    var digitado = campo.val();
    var comparavel = sentenca.substr(0,digitado.length);
    if(digitado == comparavel) {
        campo.removeClass("borda-preta");
        campo.removeClass("borda-vermelha");
        campo.addClass("borda-verde");
    } else {
        campo.removeClass("borda-preta");
        campo.removeClass("borda-verde");
        campo.addClass("borda-vermelha");
    }
});







function reiniciarJogo(){
    campo.addClass("borda-preta");
    campo.attr("disabled", false);
    campo.val("");
    campo.toggleClass("campo-desativado");
    $("#contador-palavras").text("0");
    $("#contador-caracteres").text("0");
    $("#tempo-restante").text(tempoInicial);
    cronometro();
};