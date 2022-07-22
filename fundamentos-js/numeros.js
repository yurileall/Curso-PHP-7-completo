const peso1 = 1.0
const peso2 = Number('2.0')

console.log (peso1, peso2)
console.log(Number.isInteger(peso2)) // Verificando se o número é inteiro 
console.log(Number.isInteger(peso1)) // Verificando se o número é inteiro

const avaliacao1 = 9.000
const avaliacao2 = 6.000

const total = avaliacao1 * peso1 + avaliacao2 * peso2
const media = total / (peso1 + peso2)

console.log(media.toFixed(2)) // topFixed = mostra o número com duas decimais
console.log(media.toString(2)) // toString(2) = trasformar em número bínarios
console.log(media.toString()) // toString() = voltar ao número padrão
console.log(typeof media) // typeof = mostrar o tipo da constate ou variável
 
