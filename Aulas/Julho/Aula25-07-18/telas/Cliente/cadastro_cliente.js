document.addEventListener("DOMContentLoaded", 
    (ev)=>{     
        let formCad = document.getElementById("formCadastroCliente");
        let campoTelefone = document.getElementById("telefone");
        formCad.addEventListener("submit", (ev2)=>{
            ev2.preventDefault();
            let campoNome = document.getElementById("nome");
            validaFormulario(campoNome.value, campoTelefone.value)?formCad.submit():null;
        });
        campoTelefone.addEventListener("keyup", (ev2)=>{
            validaTelefone(campoTelefone, ev2.key);
        });
    }
);
let validaFormulario = (nome, telefone) => {
    return true;
};

let validaTelefone = (campoTelefone, charDigitado) => {
    if(!["1","2","3","4","5","6","7","8","9","0"].find((el)=>{
            return charDigitado == el
        })) 
    {
        //SE NAO FOR NUMERO OU VIRGULA, RETIRA O ÚLTIMO CARACTER DIGITADO
                campoTelefone.value = campoTelefone.value.substring(0, campoTelefone.value.length-1);
    }
    //SE A VÍRGULA JÁ FOI DIGITADA ANTES, TAMBÉM TIRA
    if(charDigitado=="," && campoTelefone.value.indexOf(",")<campoTelefone.value.length-1) {
        campoTelefone.value = campoTelefone.value.substring(0, campoTelefone.value.length-1);
    }
};