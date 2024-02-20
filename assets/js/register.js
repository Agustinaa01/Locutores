function validarRegistro() {
    var nombre = document.getElementById('name').value;     
    var apellido = document.getElementById('last_name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var verify_password = document.getElementById('password2').value; // Corregido el nombre de la variable
    var pais = document.getElementById('country').value;
    var cliente = document.getElementById('cliente').checked; // Devuelve true si está marcado, false si no
    var locutor = document.getElementById('locutor').checked;

    var messageContainer = document.getElementById('message-container');
    var successMessage = document.getElementById('success-message');

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordPattern = /^.{8,}$/;

    if (nombre === "" || apellido === "" || email === "" || password === "" || verify_password === "" || pais === "" || !cliente && !locutor) {
        messageContainer.style.display = "block";
        messageContainer.innerHTML = "Por favor, ingrese todos los datos";  
    } else if (!emailPattern.test(email)) {
        messageContainer.innerHTML = "Por favor, ingrese un email válido";
    } else if (!passwordPattern.test(password)) {
        messageContainer.innerHTML = "Por favor, ingrese una contraseña de al menos 8 caracteres";
    } else {
        register();
    }
}
function register() {
    var nombre = document.getElementById('name').value;     
    var apellido = document.getElementById('last_name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var verify_password = document.getElementById('password2').value;
    var pais = document.getElementById('country').value;
    var esCliente = document.getElementById('cliente').checked;
    var esLocutor = document.getElementById('locutor').checked;


    var messageContainer = document.getElementById('message-container');
    var successMessage = document.getElementById('success-message');

    var formData = {
        nombre: nombre, 
        apellido: apellido, 
        email: email,
        password: password,
        verify_password: verify_password, 
        pais: pais,
        esCliente: esCliente,
        esLocutor: esLocutor
    };


    $.ajax({
        url: 'https://hugoluis.com/locutores/assets/ajax/procesarRegistro.php',
        type: 'POST',
        data: JSON.stringify(formData),
        success: function (response) {
            var jsonResponse = JSON.parse(response);

            if (jsonResponse.success) {
                successMessage.style.display = "block";
                messageContainer.style.display = "none";
                window.location.href = "https://hugoluis.com/locutores/login.html";
            } else {
                messageContainer.innerHTML = "Error en el registro: " + jsonResponse.message;
                messageContainer.style.display = "block";
                successMessage.style.display = "none";
            }
        },
        error: function (error) {
            console.error('Error en el registro: ' + error);
        }
    });
}
