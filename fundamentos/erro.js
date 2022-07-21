function tratarErrorLancar(erro) {
    // throw nez Error('...')
    // throw true
    // throw 10
    // throw 'menssagem
    throw {
        name: erro.nome,
        msg: erro.message,
        date: new Date
        
    }

}

function imprimirNomeGritando(obj) {
    try {
        console.log(obj.name.toUpperCase() + '!!!')
    } catch (e) {
        tratarErrorLancar(e)
    } finally {
        console.log('final')
    }
}

const obj = {nome: 'Roberto'}
imprimirNomeGritando(obj)