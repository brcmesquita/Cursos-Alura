// const tabela = document.querySelector("table");
// const tabPacientes = document.querySelectorAll(".paciente")

// tabPacientes.forEach(function(paciente){
//     paciente.addEventListener("dblclick", function(){
//         console.log("Fui clicado e serei removido")
//         this.remove();
//     })
// })

const tabela = document.querySelector("table");

tabela.addEventListener("dblclick", function(event){
    event.target.parentNode.classList.add("fadeOut");
    setTimeout(()=> {
        event.target.parentNode.remove();
        //console.log(event.target.parentNode);
    },450)
})
