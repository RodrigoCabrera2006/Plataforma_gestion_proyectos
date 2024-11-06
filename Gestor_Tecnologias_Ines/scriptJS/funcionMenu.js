// Función para abrir el menú lateral
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";  // Ancho del menú lateral
}

// Función para cerrar el menú lateral
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";  // Cerramos el menú lateral
}

// Agregar el evento de clic al ícono del menú para abrir el sidebar
document.getElementById("menuIcon").addEventListener("click", openNav);
