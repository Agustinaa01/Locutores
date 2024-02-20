function formatDate(date) {
    if (date && date !== '-') {
        var dateParts = date.split("-");
        return dateParts[2] + "/" + dateParts[1] + "/" + dateParts[0];
    } else {
        return '-'; 
    }
}


function cargarPerfilLocutor(callback) {
    $.ajax({
        url: 'assets/ajax/procesarDatosLocutor.php',
        type: 'GET',
        dataType: 'json', 
        success: function (data) {
            console.log("Respuesta del servidor:", data);
            document.getElementById('nombre').textContent = "👤" + (data.nombre || '-') + " " + (data.apellido || '-');
            document.getElementById('email').textContent = "📧" + (data.email || '-');
            document.getElementById('pais').textContent = "🌎" + (data.ciudad || '-') + ", " + (data.provincia || '-') + ", " + (data.pais || '-');
            document.getElementById('fecha_nac').textContent = "🎂" + formatDate(data.fecha_nac); 
            document.getElementById('idioma').textContent = "🗣 Idioma: " + (data.idioma || '-');
            document.getElementById('tono_voz').textContent = "🎙 Tono de voz: " + (data.tono_voz || '-');
            document.getElementById('genero').textContent = "⚥ Género: " + (data.genero || '-');
            document.getElementById('edad_de_voz').textContent = "🔊 Edad de voz: " + (data.edad_de_voz || '-');
            document.getElementById('descripcion').textContent = "💳 Descripción: " + (data.descripcion || '-');
                
            if (data.nombre === '-' || data.apellido === '-' || data.password === '-' || data.email === '-' || data.pais === '-' || data.fecha_nac === '-' || data.provincia === '-' || data.ciudad === '-' || data.telefono === '-' || data.tono_de_voz === '-' || data.genero === '-' || data.edad_de_voz === '-' || data.llego_web === '-' || data.descripcion === '-' || data.metodo_pago === '-') {
                document.getElementById('profile-alert').style.display = 'block';
            } else {
                document.getElementById('profile-alert').style.display = 'none';
            }
            var demosContainer = document.getElementById('demos');
            data.demos.forEach(function(demo) {
                var demoContainer = document.createElement('div');
                demoContainer.style.display = 'flex';
                demoContainer.style.flexDirection = 'column';
                demoContainer.style.alignItems = 'center';
                demoContainer.style.justifyContent = 'center';
    
                var titleElement = document.createElement('p'); // Crear un nuevo elemento para el título
                titleElement.textContent = demo.titulo; // Asignar el título del demo al texto del elemento
                demoContainer.appendChild(titleElement); // Agregar el elemento del título al contenedor del demo
    
                var audioAndButtonContainer = document.createElement('div'); // Crear un contenedor para el audio y el botón de eliminar
                audioAndButtonContainer.style.display = 'flex';
                audioAndButtonContainer.style.alignItems = 'center';
                audioAndButtonContainer.style.justifyContent = 'center';
    
                var audioElement = document.createElement('audio');
                audioElement.controls = true;
                audioElement.src = 'assets/assets/demos/' + demo.demo;
                audioAndButtonContainer.appendChild(audioElement); // Agregar el audio al contenedor de audio y botón
    
                var deleteButton = document.createElement('button');
                var trashIcon = document.createElement('i');
                trashIcon.className = 'fas fa-trash'; 
                trashIcon.style.color = 'red'; 
                deleteButton.appendChild(trashIcon);
                deleteButton.style.background = 'none'; 
                deleteButton.style.border = 'none'; 
                deleteButton.addEventListener('click', function() {
                    eliminarDemo(demo.demo, demoContainer);
                });
                audioAndButtonContainer.appendChild(deleteButton); // Agregar el botón de eliminar al contenedor de audio y botón
    
                demoContainer.appendChild(audioAndButtonContainer); // Agregar el contenedor de audio y botón al contenedor del demo
                demosContainer.appendChild(demoContainer);
                demosContainer.appendChild(document.createElement('br'));
            });

            if (typeof callback === 'function') {
                callback(data); 
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
    cargarPerfilLocutor();
});


function eliminarDemo(demo, demoContainer) {
    var confirmacion = confirm('¿Estás seguro de que quieres eliminar este demo?');
    if (confirmacion) {
        $.ajax({
            url: 'assets/ajax/procesarEliminarDemo.php',
            type: 'POST',
            data: { demo: demo },
            success: function(response) {
                demoContainer.remove();
                var mensajeElemento = document.getElementById('mensaje');
                mensajeElemento.innerHTML = 'Demo eliminada correctamente';
                mensajeElemento.style.display = 'block';
                setTimeout(function() {
                    mensajeElemento.innerHTML = '';
                    mensajeElemento.style.display = 'none';
                }, 3000);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error al eliminar la demo:', errorThrown);
                console.log('Estado de la respuesta:', jqXHR.status);
                console.log('Texto de la respuesta:', jqXHR.responseText);
            }
        });
    }
}

