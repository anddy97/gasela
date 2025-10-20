const tBody = document.getElementById("filaCart");
const table = document.getElementById("tab");

fetch("./back/cartshop.php")
  .then((res) => res.json())
  .then((data) => {
    if (data.length >= 1) {
      data.forEach((element) => {
        const fila = document.createElement("tr");
        fila.innerHTML = `
          <td><img src="assets/products/${element.IMAGEN}" alt="Imagen de ${
          element.NOMBRE
        }"></td>
              <td>${element.NOMBRE}</td>
              <td>${element.TALLA}</td>
              <td>${element.CANTIDAD}</td>
              <td>${
                element.CANTIDAD * element.PRECIO
              } <i class="fa-solid fa-trash" onclick="eliminar(this)" data-id="${
          element.ID
        }" data-talla="${element.TALLA}" ></i></td>
              `;

        tBody.appendChild(fila);
      });
    } else {
      table.innerHTML =
        "<p style='text-align:center;'>Aun no realizaste una compra </p>";
    }
  });

function eliminar(element) {
  const fila = element.parentNode.parentNode;
  const filaId = element.dataset.id;
  const filaTalla = element.dataset.talla;

  fetch("./back/cartshop.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      accion: "eliminar",
      id: filaId,
      talla: filaTalla,
    }),
  });
  fila.remove();
  actualizarContadorCarrito();
}
