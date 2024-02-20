function cerrarSesion() {
    $.ajax({
        url: 'assets/ajax/procesarLogOut.php',
        type: 'GET', 
        success: function (data) {
            window.location.href = "https://hugoluis.com/locutores/login.html";
        }
    });
}
