function login() {
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;


    var messageContainer = document.getElementById('message-container');
    var successMessage = document.getElementById('success-message');

    var formData = {
        email: email,
        password: password,
    };


    $.ajax({
        url: 'assets/ajax/procesarLogin.php',
        type: 'POST',
        data: JSON.stringify(formData),
        success: function (response) {
        var jsonResponse = JSON.parse(response);

        if (jsonResponse.success) {
            successMessage.style.display = "block";
            messageContainer.style.display = "none";
            if (jsonResponse.userType === 'cliente') {
                window.location.href = "about.php";
            } else if (jsonResponse.userType === 'locutor') {
                window.location.href = "perfil_locutor.php";
            }
        } else {
            messageContainer.innerHTML = "" + jsonResponse.message;
            messageContainer.style.display = "block";
            successMessage.style.display = "none";
        }
    },
        error: function (error) {
            console.error(error);
        }
    });
}
