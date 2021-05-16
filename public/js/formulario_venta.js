document.addEventListener("DOMContentLoaded",main);

function main(){

    load();
    load2();


    function load() {

        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function(){
            if(this.readyState == 4 && this.status == 200){

                rellenador(JSON.parse(this.responseText));
            }
        });

        xhttp.open("GET","../src/Entity/showMarca.php", true);
        xhttp.send();

    
    }

    function rellenador(array_json){
        let select = document.getElementById("marca");

        for(z in array_json){
           let opcion = document.createElement('option');
            opcion.text = array_json[z].title;
            opcion.value = array_json[z].id;
            select.appendChild(opcion);
        }

    }

    function load2() {

        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function(){
            if(this.readyState == 4 && this.status == 200){

                rellenador_modelo(JSON.parse(this.responseText));
            }
        });

        xhttp.open("GET","../src/Entity/showModelo.php", true);
        xhttp.send();


    }

    function rellenador_modelo(array_modelos_json){
        let select = document.getElementById("marca");
        let select_modelo = document.getElementById("modelo");
        let que_marca_es = select.addEventListener("change",function(){
            select_modelo.innerHTML = "";

            for(y in array_modelos_json){

                if(this.value == array_modelos_json[y].make_id){

                    let opcion = document.createElement("option");
                    opcion.text = array_modelos_json[y].title;
                    opcion.value = array_modelos_json[y].id;
                    select_modelo.appendChild(opcion);


                }

            }





        })
    }





}