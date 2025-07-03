document.addEventListener("DOMContentLoaded", () => {
  const botones = document.querySelectorAll(".categoria");
  const secciones = document.querySelectorAll(".subcategoria");

  function mostrarCategoria(categoriaSeleccionada) {
    // Mostrar solo las secciones con ese data-categoria
    secciones.forEach(section => {
      const categoria = section.getAttribute("data-categoria");
      section.style.display = categoria === categoriaSeleccionada ? "block" : "none";
    });

    // Actualizar estilo de los botones
    botones.forEach(btn => {
      if (btn.getAttribute("data-categoria") === categoriaSeleccionada) {
        btn.classList.add("seleccionada");
      } else {
        btn.classList.remove("seleccionada");
      }
    });
  }

  // Mostrar inicialmente solo la primera
  mostrarCategoria("cuerpo");

  // Asignar evento click a cada botón
  botones.forEach(boton => {
    boton.addEventListener("click", () => {
      const categoria = boton.getAttribute("data-categoria");
      mostrarCategoria(categoria);
    });
  });
});