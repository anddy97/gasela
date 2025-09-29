const btnSumar = document.getElementById("btn-sumar-cont");
const btnRestar = document.getElementById("btn-restar-cont");
let contador = document.getElementById("contador-product");
const formulario = document.getElementById("formdatos");

btnSumar.addEventListener('click', e=>{
    let valorActual = parseInt(contador.value);
     contador.value = valorActual +1
})

btnRestar.addEventListener('click', e=>{
    let valorActual = parseInt(contador.value);
    if(valorActual >1){
        contador.value = valorActual -1
    }
    else(valorActual <=1)
        contador.value == 1
    
})

// formulario.addEventListener("submit",e=>{
//     e.preventDefault()

//     const form = e.target
//     const formDat = new FormData(form)

//     fetch('./back/carrito.php',{
//         method: 'POST',
//         body: formDat
//     })
    

//     .then(response => response.text()) // o .json() si el PHP devuelve JSON
//   .then(data => {
//   console.log (data)
//     form.reset(); // opcional: limpia el formulario
//   })
//   .catch(error => {
//     console.error('Error:', error);
//   });

    
// } )

