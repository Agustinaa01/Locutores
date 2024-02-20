function formatDate(date) {
    if (date && date !== '-') {
        var dateParts = date.split("-");
        return dateParts[2] + "/" + dateParts[1] + "/" + dateParts[0];
    } else {
        return '-'; 
    }
}

function cargarPerfil(callback) {
    $.ajax({
        url: 'assets/ajax/procesarDatosCliente.php',
        type: 'GET',
        dataType: 'json', 
        success: function (data) {
            if (data.success) {
                document.getElementById('nombre').textContent = "" + (data.nombre || '-') + " " + (data.apellido || '-');
                document.getElementById('email').textContent = "📧" + (data.email || '-');
                document.getElementById('pais').textContent = "🌎" + (data.ciudad || '-') + ", " + (data.provincia || '-') + ", " + (data.pais || '-');
                document.getElementById('fecha_nac').textContent = "🎂" + formatDate(data.fecha_nac); 
                
                if (data.nombre === '-' || data.apellido === '-' || data.email === '-' || data.pais === '-' || data.fecha_nac === '-' || data.provincia === '-' || data.ciudad === '-' || data.telefono === '-') {
                    document.getElementById('profile-alert').style.display = 'block';
                } else {
                    document.getElementById('profile-alert').style.display = 'none';
                }

                if (typeof callback === 'function') {
                    callback(data); 
                }
            } else {
                console.log("Error: " + data.message);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error en la carga del perfil: ', errorThrown);
            console.log('Estado de la respuesta:', jqXHR.status);
            console.log('Texto de la respuesta:', jqXHR.responseText);
        }
    });
}


document.addEventListener("DOMContentLoaded", function () {
    cargarPerfil();
});
