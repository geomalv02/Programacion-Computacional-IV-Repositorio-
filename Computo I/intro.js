var nombres = ['nohemy', 'carlos', 'juan']
function funcionDeclarativa(nombre){
    console.log(`Buenas tardes, ${nombre}`)
}
const funcionExpression = function(nombre){
    console.log(`Hola, funcion expresion,
    ${nombre}`)
}
const funcionFlecha = nombre => {
    console.log(`Hola, funcion de flecha, 
    ${nombre}`)
}
for(var i=0; i<nombres.length; i++){
    funcionDeclarativa(nombres[i])
    funcionExpression(nombres[i])
    funcionFlecha(nombres[i])
}

