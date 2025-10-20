document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".sidenav");
  var instances = M.Sidenav.init(elems, {
    edge: "right",
  });
});

fetch("./back/cartshop.php")
  .then((res) => res.json())
  .then((data) => {
    let contCart = document.querySelectorAll(".cantidad-carrito");
    contCart.forEach((element) => {
      const totalCantidad = data.reduce((acumulador, item) => {
        return acumulador + item.CANTIDAD;
      }, 0);

      element.append(totalCantidad);
    });
  });

function actualizarContadorCarrito() {
  fetch("./back/cartshop.php")
    .then((res) => res.json())
    .then((data) => {
      let contCart = document.querySelectorAll(".cantidad-carrito");
      contCart.forEach((element) => {
        const totalCantidad = data.reduce((acumulador, item) => {
          return acumulador + item.CANTIDAD;
        }, 0);

        element.innerHTML = totalCantidad;
      });
    });
}
