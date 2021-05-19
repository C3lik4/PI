document.addEventListener("DOMContentLoaded",main);

function main(){

    cargarDinero();

    function cargarDinero(){
        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function(){
            if(this.readyState == 4 && this.status == 200){

                rellenador_cartera(JSON.parse(this.responseText));
            }
        });

        xhttp.open("GET","../src/Entity/showDinero.php", true);
        xhttp.send();

    }

    function rellenador_cartera(){

        

    }







}