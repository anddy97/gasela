document.getElementById("registrar").addEventListener("submit", (e) => {
  e.preventDefault();

  const formRegistrar = new FormData(e.target);
  formRegistrar.append("accion", "agregarUsr");

  // Muestra en consola lo que se va a enviar
  for (let [k, v] of formRegistrar.entries()) {
    console.log(k, v);
  }

  fetch("./back/sesions.php", {
    method: "POST",
    body: formRegistrar,
  })
    .then((r) => r.text())
    .then((d) => console.log("Respuesta del backend:", d));
});
