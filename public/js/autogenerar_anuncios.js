document.addEventListener("DOMContentLoaded",main);

function main(){

    cargar_anuncios();

    function cargar_anuncios() {

        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function(){
            if(this.readyState == 4 && this.status == 200){

                rellenador_anuncios(JSON.parse(this.responseText));
            }
        });

        xhttp.open("GET","../src/Entity/showAnuncios.php", true);
        xhttp.send();

    
    }


    function rellenador_anuncios(array_anuncios_json){
        
        let contenedor_anuncios = document.getElementById("contenedor");

        for(let z = 0; z < array_anuncios_json.length; z = z+3){
    

           
        
           let fila_tarjeta = document.createElement("div");
           fila_tarjeta.className = "row";
           contenedor_anuncios.appendChild(fila_tarjeta);

           for(let x = 0; x < array_anuncios_json.length; x++){
    
              
            let primer_div = document.createElement("div");
            primer_div.className="col-lg-4 col-md-6 mb-4";
            fila_tarjeta.appendChild(primer_div);
 
            let segundo_div = document.createElement("div");
            segundo_div.className = "card h-100 lista bordes";
            primer_div.appendChild(segundo_div);
 
            let imagen = document.createElement("img");
            imagen.className = "card-img-top";
            imagen.setAttribute("src","anuncios/array_anuncios_json[x].foto");
            segundo_div.appendChild(imagen);
            
 
            let div_cuerpo = document.createElement("div");
            div_cuerpo.className = "card-body";
            segundo_div.appendChild(div_cuerpo);
 
            let marca = document.createElement("p");
            marca.className = "items";
            div_cuerpo.appendChild(marca);
            
 
            let precio = document.createElement("h5");
            precio.innerHTML = array_anuncios_json[x].precio;
            div_cuerpo.appendChild(precio);
            
            
            let lista = document.createElement("ul");
            lista.className = "card-text descripcion_coche";
            div_cuerpo.appendChild(lista);
 
            let modelo = document.createElement("li");
            lista.appendChild(modelo);
            
 
            let color = document.createElement("li");
            color.innerHTML = array_anuncios_json[x].color;
            lista.appendChild(color);
            
 
            let año = document.createElement("li");
            año.innerHTML = array_anuncios_json[x].ano;
            lista.appendChild(año);
            
 
            let km = document.createElement("li");
            km.innerHTML = array_anuncios_json[x].km;
            lista.appendChild(km);
            
 
            let footer = document.createElement("div");
            footer.className = "card-footer center fuente_navbar";
             segundo_div.appendChild(footer);
 
             let boton = document.createElement("button");
             boton.className = "btn btn--radius-2 btn--red";
             boton.setAttribute("data-toggle","modal")
             boton.setAttribute("data-target","#exampleModalCenter")
             boton.innerHTML = "COMPRAR";
 
             footer.appendChild(boton);
           }
           
        }

    }



}