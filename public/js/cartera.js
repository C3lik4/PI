document.addEventListener("DOMContentLoaded", main);

function main() {


    document.getElementById("moneyForm").addEventListener("submit", function (e) {

        // INHABILITA EL RECARGAR LA PÁGINA AL ENVIAR EL FORMULARIO//
        e.preventDefault();

        // LLAMAMOS A LA FUNCION ENVIARFORM PASANDOLE EL ELEMENTO ACTUAL //
        enviarForm(e.currentTarget);
        console.log("Has hecho click en enviar");
    });

    function enviarForm(formElement) {

        // CREAMOS UN OBJETO FORMDATA (FORMATO XMLHttpRequest)//
        let formData = new FormData(formElement);
        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                console.log(this.responseText);
            }
        });
        xhttp.open("POST", "../src/Entity/updateCartera.php", true);
        xhttp.send(formData);
    }

    /* function updateAnuncios() {

        let datosAnteriores = document.getElementsByClassName("col-lg-4 col-md-6 mb-4");
        while (datosAnteriores[0]) {
            datosAnteriores[0].parentNode.removeChild(datosAnteriores[0]);
        }
    } */
    const reloadtButton = document.querySelector("#reload");
    // Reload everything:
    function reload() {
        reload = location.reload();
    }
    // Event listeners for reload
    reloadButton.addEventListener("click", reload, false);






}