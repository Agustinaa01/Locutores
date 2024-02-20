function cargarEdicionPerfilLocutor() {
    document.getElementById('profile-info').style.display = 'none';
    document.getElementById('edit-form').style.display = 'block';

    cargarPerfilLocutor(function (data) {
        document.getElementById('edit_nombre').value = data.nombre;
        document.getElementById('edit_apellido').value = data.apellido;
        document.getElementById('edit_email').value = data.email;
        document.getElementById('edit_tono_voz').value = data.tono_voz;
        document.getElementById('edit_genero_voz').value = data.genero;
        document.getElementById('edit_edad_voz').value = data.edad_de_voz;
        document.getElementById('edit_idioma').value = data.idioma;
        document.getElementById('edit_fecha_nac').value = data.fecha_nac;
        
        document.getElementById('edit_telefono').value = data.telefono;
        document.getElementById('edit_ciudad').value = data.ciudad;
        document.getElementById('edit_provincia').value = data.provincia;
        document.getElementById('edit_metodo_pago').value = data.metodo_pago;
        document.getElementById('edit_llego_web').value = data.llego_web;
        document.getElementById('edit_descripcion').value = data.descripcion;
    });
}

function editar_guardar_locutor() { 
    var edit_nombre = document.getElementById('edit_nombre').value;
    var edit_apellido = document.getElementById('edit_apellido').value;
    var edit_email = document.getElementById('edit_email').value;
    var edit_tono_voz = document.getElementById('edit_tono_voz').value;
    var edit_genero_voz = document.getElementById('edit_genero_voz').value;
    var edit_edad_voz = document.getElementById('edit_edad_voz').value;
    var edit_idioma = document.getElementById('edit_idioma').value;
    var edit_fecha_nac = document.getElementById('edit_fecha_nac').value; 
    var edit_telefono = document.getElementById('edit_telefono').value;
    var edit_ciudad = document.getElementById('edit_ciudad').value;
    var edit_provincia = document.getElementById('edit_provincia').value;
    var edit_password = document.getElementById('edit_password').value;
    var edit_pais = document.getElementById('country').value;
    var edit_llego_web = document.getElementById('edit_llego_web').value;
    var edit_descripcion = document.getElementById('edit_descripcion').value;
    var edit_metodo_pago = document.getElementById('edit_metodo_pago').value;

    var formData = {
        nombre: edit_nombre,
        apellido: edit_apellido,
        email: edit_email,
        tono_voz: edit_tono_voz,
        genero_voz: edit_genero_voz,
        edad_voz: edit_edad_voz,
        idioma: edit_idioma,
        fecha_nac: edit_fecha_nac,
        telefono: edit_telefono,
        ciudad: edit_ciudad,
        provincia: edit_provincia,
        password: edit_password,
        pais: edit_pais,
        llego_web: edit_llego_web,
        metodo_pago: edit_metodo_pago,
        descripcion: edit_descripcion
    };
    
    if (
        edit_nombre === "" || edit_nombre === "-" ||
        edit_apellido === "" || edit_apellido === "-" ||
        edit_email === "" || edit_email === "-" ||
        edit_tono_voz === "" || edit_tono_voz === "-" ||
        edit_genero_voz === "" || edit_genero_voz === "-" ||
        edit_edad_voz === "" || edit_edad_voz === "-" ||
        edit_idioma === "" || edit_idioma === "-" ||
        edit_fecha_nac === "" || edit_fecha_nac === "-" ||
        edit_telefono === "" || edit_telefono === "-" ||
        edit_ciudad === "" || edit_ciudad === "-" ||
        edit_provincia === "" || edit_provincia === "-" ||
        edit_pais === "" || edit_pais === "-" ||
        edit_llego_web === "" || edit_llego_web === "-" ||
        edit_descripcion === "" || edit_descripcion === "-" ||
        edit_metodo_pago === "" || edit_metodo_pago === "-"
    ) {
        document.getElementById('success-message').style.display = 'block';
    } else {
        document.getElementById('success-message').style.display = 'none';
    }


    $.ajax({
        url: 'assets/ajax/procesarEditarLocutor.php',
        type: 'POST',
        data: JSON.stringify(formData),
        contentType: 'application/json', 
        success: function (response) {
            var data = JSON.parse(response);
            cargarPerfilLocutor();
            document.getElementById('edit-form').style.display = 'none'; 
            document.getElementById('profile-info').style.display = 'block';
        },
        error: function (error) {
            console.error("Error:", error);
        }
    });
}
