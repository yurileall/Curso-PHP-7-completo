// Armazenado uma função em uma variável
const imprimirSoma = function (a, b) {
    console.log(a + b)
}

imprimirSoma(2, 3)

// Armazenado uma função arrow em uma variável
const soma = (a, b) => {
    return a + b
}

console.log(soma(2, 3))

// Retorno implícito
const subtrair = (a, b) => a - b

console.log(subtrair(3, 2))

const imprimir2 = a => console.log(a)
imprimir2("Hello!!")