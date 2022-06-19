const btnAdicionarPaciente = document.querySelector("#adicionar-paciente");

/* botão para adicionar um paciente na lista */
btnAdicionarPaciente.addEventListener("click", event => {
    event.preventDefault();

    const form = document.querySelector("#form-adicionar");

    var paciente = getFormData(form);

    var pacienteTr = montaTr(paciente);
   
    const tabela = document.querySelector("#tabela-pacientes");

    const mensagemErro = document.querySelector("#mensagem-erro");
    const ul = document.querySelector("ul");
    const li = document.createElement("li");

    if ( validaNome(paciente.nome) && validaPeso(paciente.peso) && validaAltura(paciente.altura) && validaGordura(paciente.gordura)){
        tabela.appendChild(pacienteTr);
    } else {
        ul.innerHTML = "";
        mensagemErro.classList.add("ativa");
        erros.forEach(erro => {
            li.textContent = erro;
            ul.appendChild(li);     
        });
        
    }

    /* apaga os dados inseridos no formulário após o envio */
    form.reset();

    function getFormData() {
     let paciente = {
         nome: form.nome.value,
         peso: form.peso.value,
         altura: form.altura.value,
         gordura: form.gordura.value,
         imc: calcularIMC(form.peso.value, form.altura.value)
     }
     return paciente;
    }

    function montaTr(paciente){
        const pacienteTr = document.createElement("tr");
        pacienteTr.classList.add("paciente");

        pacienteTr.appendChild(montaTd(paciente.nome, "info-nome"));
        pacienteTr.appendChild(montaTd(paciente.peso, "info-peso"));
        pacienteTr.appendChild(montaTd(paciente.altura, "info-altura"));
        pacienteTr.appendChild(montaTd(paciente.gordura, "info-gordura"));
        pacienteTr.appendChild(montaTd(paciente.imc, "info-imc"));

        return pacienteTr;
    }

    function montaTd(dado, classe){
        const td = document.createElement("td");
        td.textContent = dado;
        td.classList.add(classe);
        return td;
    }

})