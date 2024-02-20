function subirDemo() {
    var formData = new FormData();
    var input = document.getElementById('audio-upload');
    var title = document.getElementById('title').value;

    if (input.files.length > 0) {
        formData.append('demo', input.files[0]);
        formData.append('title', title);
        document.getElementById('loading').style.display = 'block';

        $.ajax({
            url: 'assets/ajax/procesarSubirDemo.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                var data = JSON.parse(response);
                if (data.success) {
                    console.log(data.message);
                    document.getElementById('loading').style.display = 'none';
                    document.getElementById('demo-success-message').style.display = 'block'; // Mostrar mensaje de éxito
                    setTimeout(function() {
                        document.getElementById('demo-success-message').style.display = 'none'; // Ocultar mensaje después de unos segundos
                    }, 3000); // 3000 milisegundos = 3 segundos
                    window.location.href = 'perfil_locutor.php'; // Redirigir a perfil_locutor.php
                } else {
                    console.error(data.message);
                    document.getElementById('loading').style.display = 'none';
                }
            },
            error: function (error) {
                console.error("Error:", error);
                document.getElementById('loading').style.display = 'none';
            }
        });
    } else {
        document.getElementById('error-message').style.display = 'block'; // Mostrar mensaje de error
        setTimeout(function() {
            document.getElementById('error-message').style.display = 'none'; // Ocultar mensaje después de unos segundos
        }, 5000);
    }
}