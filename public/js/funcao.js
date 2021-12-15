// function mascara(telefone){ 
//     document.getElementById('phone').addEventListener('blur', function(e) {
//         if(e.value.length == 0)
//             e.value = '(' + e.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
//         if(e.value.length == 3)
//             e.value = e.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
    
//         if(e.value.length == 10)
//             e.value = e.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.

//     })
// }

function maskPhone() {
    document.getElementById('phone').addEventListener('input', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = '(' +x[1] + ') '+ x[2] + '-' + x[3]
      });

}

function mask_cep (valor) {
    if(valor.value.length == 5) {
        valor.value = valor.value + '-';
    }
}

/*function mask_cpf(cpf) {
    if(cpf.value.length == 4) {
        cpf.value = cpf.value + '.';
    }
}*/
