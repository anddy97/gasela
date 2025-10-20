const btnSumar = document.getElementById("btn-sumar-cont");
const btnRestar = document.getElementById("btn-restar-cont");
let contador = document.getElementById("contador-product");
const formulario = document.getElementById("formdatos");

btnSumar.addEventListener("click", (e) => {
  let valorActual = parseInt(contador.value);
  contador.value = valorActual + 1;
});

btnRestar.addEventListener("click", (e) => {
  let valorActual = parseInt(contador.value);
  if (valorActual > 1) {
    contador.value = valorActual - 1;
  } else valorActual <= 1;
  contador.value == 1;
});

formulario.addEventListener("submit", (e) => {
  e.preventDefault();
  let form = new FormData(formulario);

  if (form.get("tallaproducto") === null) {
    M.toast({ html: "Debe seleccionar un talle", classes: "rounded" });
  } else {
    fetch("./back/cartshop.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        accion: "agregar",
        id: form.get("idproducto"),
        nombre: form.get("nombreproducto"),
        precio: form.get("precioproducto"),
        imagen: form.get("imagenproducto"),
        cantidad: form.get("cantidadproducto"),
        talla: form.get("tallaproducto"),
      }),
    });
    actualizarContadorCarrito();
  }
});
