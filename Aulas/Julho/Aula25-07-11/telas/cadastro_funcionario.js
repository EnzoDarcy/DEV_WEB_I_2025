document.addEventListener("DOMContentLoaded", (ev) => {
    let formCad = document.getElementById("formCadastroFuncionario")
    let campoNome = document.getElementById("nome")
    let campoSalario = document.getElementById("salario")
    let campoTelefone = document.getElementById("telefone")
    formCad.addEventListener("submit", (ev2) => {
        ev2.preventDefault()
        validaFormulario(campoNome.value, campoSalario.value, campoTelefone.value)?formCad.submit():null
    })
    campoSalario.addEventListener("keypress", (ev2) => {
        if(![1, 2, 3, 4, 5, 6, 7, 8, 9, 0, ","].find(ev2.key)) {
            campoSalario.value = campoSalario.value.substring(0, campoSalario.value.length-1)
        }
    })
})

let validaFormulario = (nome, salario, telefone) => {
    return true
}