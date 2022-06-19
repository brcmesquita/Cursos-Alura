/* muda o titulo da página */
const titulo = document.querySelector('.titulo');
titulo.textContent = "Aparecida Nutricionista";

/* lista todos os pacientes na tabela */
const pacientes = document.querySelectorAll('.paciente');
//console.log(pacientes);


/* roda um por um */
for (let i = 0; i < pacientes.length; i++){

    let paciente = pacientes[i];

    const tdPeso = paciente.querySelector('.info-peso');
    let peso = tdPeso.textContent;
    
    const tdAltura = paciente.querySelector('.info-altura');
    let altura = tdAltura.textContent;

    const tdImc = paciente.querySelector('.info-imc');

    let podeCalcular = true

    if (!validaPeso(peso)) {
        console.log("Peso inválido");
        tdImc.textContent = "Peso inválido!";
        podeCalcular = false;
        paciente.classList.add("paciente-invalido");
    }

    if (!validaAltura(altura)) {
        console.log("Altura inválida!");
        tdImc.textContent = "Altura inválida!";
        podeCalcular = false;
        paciente.classList.add("paciente-invalido");
    }

    /* calculo do imc */
    if (podeCalcular) {
        tdImc.textContent = calcularIMC(peso, altura);
        //console.log(tdImc.textContent);
    } else {
        tdImc.textContent = "Peso e/ou altura inválidos!";
    }

    function calcularIMC(peso, altura){
        let imc;
        imc = peso / (altura * altura);
        return imc.toFixed(2);
    }

    var erros = [];

    function validaNome(nome){
        if (nome.length > 0) {
            return true;
        } else {
            erros.push("Insira um nome válido!")
            return false;
        }
    }

    function validaPeso(peso){
        if ( peso > 0 && peso < 1000 ) {
            return true;
        } else {
            erros.push("Peso inválido!");
            return false;
        }
    }

    function validaAltura(altura) {
        if ( altura < 4.0 && altura > 0) {
            return true;
        } else {
            erros.push("Altura inválida!");
            return false;
        }
    }

    function validaGordura(gordura){
        if (gordura > 0 && gordura < 1000) {
            return true;
        } else {
            erros.push("Gordura inválida!");
            return false;
        }
    }

}