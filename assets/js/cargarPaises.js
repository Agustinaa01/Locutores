function cargarPaises() {
    let country = document.getElementById('country'); 

    $.ajax({
        url: 'assets/ajax/procesarPaises.php',
        type: 'GET',
        success: function (data) {
            country.innerHTML = data; 
        },
        error: function (xhr, status, error) {
            console.error("Error al cargar los países:", error);
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
    cargarPaises();
});