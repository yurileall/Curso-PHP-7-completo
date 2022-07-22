const nome = "Rebeca"
const concatenacao = 'Olá ' + nome + '!'
const template = `
    Olá
    ${nome}!`
console.log(concatenacao, template)

// expressaoes...
console.log(`1 + 1 = ${1 + 1}`)

const up = texto => texto.toUpperCase() // Funçao para Aumentar a caixa de texto
console.log(`Ei... ${up(`cuidado`)}!`)