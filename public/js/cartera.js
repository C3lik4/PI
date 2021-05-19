document.addEventListener("DOMContentLoaded",main);

function main(){

    

    document.getElementById("dinero").addEventListener("submit", function (e) {

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
            if (xhttp.readyState == 4 && xhttp.status == 200){ 
            console.log(this.responseText);
            }
        });
        xhttp.open("POST", "../src/Entity/updateCartera.php", true);
        xhttp.send(formData);
    }


    







}