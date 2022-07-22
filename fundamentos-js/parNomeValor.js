// par nome/valor
const saudacao = 'opa' // contexto léxico 1

function exec() {
    const saudacao = 'Falaaa' // contesto léxico 2
    return saudacao
}

// objeto são grupos aninhados de pares nome/valor
const cliente = {
    nome: 'Pedro',
    idade: 32,
    peso: 90,
    endereço: {
        logradouro: 'Rua da felicidade',
        numero: 234
    }
}

console.log(saudacao)
console.log(exec())
console.log(cliente)