document.addEventListener("DOMContentLoaded", main);

function main() {

    // EVENTO LISTENER ENCARGADO DE ENVIAR EL FORMULARIO A LA BBDD //
    document.getElementById("registerForm").addEventListener("submit", function (e) {

        // INHABILITA EL RECARGAR LA PÁGINA AL ENVIAR EL FORMULARIO//
        e.preventDefault();

        // LLAMAMOS A LA FUNCION ENVIARFORM PASANDOLE EL ELEMENTO ACTUAL //
        enviarForm(e.currentTarget);
        console.log("Has hecho click en enviar");
    });


}


// FUNCION QUE HACE LA LLAMADA ASINCRONA A saveMessage.PHP //
function enviarForm(formElement) {

    // CREAMOS UN OBJETO FORMDATA (FORMATO XMLHttpRequest)//
    let formData = new FormData(formElement);
    const xhttp = new XMLHttpRequest();
    xhttp.addEventListener("readystatechange", function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) { }
        console.log(this.responseText);
    });
    xhttp.open("POST", "../src/Entity/saveRegister.php", true);
    xhttp.send(formData);
}