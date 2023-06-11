//mostrar ocultar div
const hidebtn = document.querySelector('#hideElements')
const listDiv = document.querySelector('#list')

//constantes para agregar elementos
const addItemImput = document.querySelector('#addItem') //input:text
const addItemButton = document.querySelector('#button#addItemButton')

//constante para el boton quitar
const removeItem = document.querySelector('button')

//Evaluar si el input esta vacio, no debe agregar el elemento


//agregar los eventos al boton ocultar/mostrar
hidebtn.addEventListener('click', () => {
    if(listDiv.style.Display == 'none'){
        listDiv.style.Display = 'block'
        hidebtn.textContent = 'Ocultar'
    } else {
        listDiv.style.Display = 'none'
        hidebtn.textContent = 'Mostrar'
    }
})

//agregar elementos a la lista
addItemButton.addEventListener('click', () => {
    let list = document.querySelector('ul')
    let li = document.createElement('li')
    li.textContent = addItemImput.value
    list.appendChild(li)
})

//funcion para obtener el indice del elemento en la lista
var list = document.getElementById('listItems'),
items = list.getElementsByTagName('li')

const findIndex = (element) => {
    var len = items.length
    for(var i=0; i<len; i++){
        if(items[i]===element){
            return i
        }
    }
}

list.onclick = (e) =>{
    let event = e || window.event
    src=event.target

    var myIndex = findIndex(src)
    //alert(myIndex)
    list.querySelector('li').forEach(el=>el.classList.
        remove('alert', 'alert-danger'))
    items[myIndex].classList.add('alert', 'alert-danger')
}

//eliminar el elemento de la lista
removeItem.addEventListener('click', () => {
    items[index].parentNode.removeChild(items[index])
})

