let inicioSesion = document.getElementById("InicioSesion");
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
    .then((r) => r.json())

    .then((data) => {
      console.log(data); // respuesta del PHP
      if (data.success) {
        alert("✅ " + data.message);
      } else {
        alert("❌ " + data.message);
      }
    });
});

inicioSesion.addEventListener("submit", (e) => {
  e.preventDefault();
  const formSesion = new FormData(inicioSesion);
  formSesion.append("accion", "iniciarSesion");

  // Muestra en consola lo que se va a enviar
  for (let [k, v] of formSesion.entries()) {
    console.log(k, v);
  }

  fetch("./back/sesions.php", {
    method: "POST",
    body: formSesion,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      if (data.success) {
        alert("✅" + data.message);
        window.location.href = data.redirect;
      } else {
        alert("❌" + data.message);
      }
    });
});
