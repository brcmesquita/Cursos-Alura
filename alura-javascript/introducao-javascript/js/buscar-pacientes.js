const botaoBuscarPacientes = document.querySelector("#buscar-pacientes");

botaoBuscarPacientes.addEventListener("click", function(){
    console.log("Buscando...")

    var xhr = new XMLHttpRequest();
    
    xhr.open("GET", "https://api-pacientes.herokuapp.com/pacientes");
    
    xhr.addEventListener("load", function(){
        
        if (xhr == 200) {
            var resposta = xhr.responseText;
            var pacientes = JSON.parse(resposta);
            pacientes.forEach( function(paciente) {
                //TODO: montar a lista na tela
            });
        } else {
            console.log( xhr.status );
            console.log( xhr.responseText );
        }
    });

    xhr.send();
})