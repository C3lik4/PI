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
        
        let modal = document.createElement("div");
        modal.className = "modal fade";
        modal.id = "exampleModalCenter";
        modal.setAttribute("tabindex","-1");
        modal.setAttribute("role","dialog");
        modal.setAttribute("aria-labelledby","exampleModalCenterTitle");
        modal.setAttribute("aria-hidden","true");

        let modal_dialog = document.createElement("div");
        modal_dialog.className = "modal-dialog modal-dialog-centered";
        modal_dialog.setAttribute("role","document");

        let modal_content = document.createElement("div");
        modal_content.className = "modal-content";

        let modal_header = document.createElement("div");
        modal_header.className = "modal-header";

        let h5 = document.createElement("h5");
        h5.className = "modal-title center";
        h5.id = "exampleModalLongTitle";
        h5.innerHTML = "Confirmación de compra";

        let boton_cerrar = document.createElement("button");
        boton_cerrar.className = "close";
        boton_cerrar.setAttribute("type","button");
        boton_cerrar.setAttribute("data-dismiss","modal");
        boton_cerrar.setAttribute("aria-label","Close");

        let span_boton = document.createElement("span");
        span_boton.setAttribute("aria-hidden","true");
        span_boton.innerHTML =  "&times";

        let body = document.createElement("div");
        body.className = "modal-body";
        body.innerHTML = "¿Está seguro de realizar la compra?";


        let footer = document.createElement("div");
        footer.className = "modal-footer";

        let boton_no = document.createElement("button");
        boton_no.className = "btn btn-small btn--no";
        boton_no.setAttribute("type","button");
        boton_no.setAttribute("data-dismiss","modal");

        let boton_si = document.createElement("button");
        boton_si.className = "btn btn-small btn--green";
        boton_si.setAttribute("type","button");





        let contenedor_anuncios = document.getElementById("contenedor");


        for(let z = 0; z < array_anuncios_json.length; z = z + 3){
    
           let fila_tarjeta = document.createElement("div");
           fila_tarjeta.className = "row";
           contenedor_anuncios.appendChild(fila_tarjeta);
           
        

           for(let x = z; (x < z+3) && (x < array_anuncios_json.length) ; x++){
    
              
            let primer_div = document.createElement("div");
            primer_div.className="col-lg-4 col-md-6 mb-4";
            fila_tarjeta.appendChild(primer_div);
 
            let segundo_div = document.createElement("div");
            segundo_div.className = "card h-100 lista bordes";
            primer_div.appendChild(segundo_div);
 
            let imagen = document.createElement("img");
            let foto = array_anuncios_json[x].foto
            imagen.className = "card-img-top";
            imagen.src = "./anuncios/" + foto;
            segundo_div.appendChild(imagen);
            
            let div_cuerpo = document.createElement("div");
            div_cuerpo.className = "card-body ";
            segundo_div.appendChild(div_cuerpo);
 
            let marca = document.createElement("p");
            marca.className = "items center marca";
            div_cuerpo.appendChild(marca);
            marca.innerHTML = array_anuncios_json[x].Marca;
 
            let precio = document.createElement("h5");
            precio.innerHTML = array_anuncios_json[x].precio + " €";
            precio.value = array_anuncios_json[x].precio;
            precio.className = "center precio span_sombras ";
            div_cuerpo.appendChild(precio);
            
            
            let lista = document.createElement("ul");
            lista.className = "card-text descripcion_coche";
            div_cuerpo.appendChild(lista);
 
            let modelo = document.createElement("li");
            lista.appendChild(modelo);
            modelo.className = "fila fuente_anuncios modelo ul";
            modelo.innerHTML = array_anuncios_json[x].modelo;
            
 
            let color = document.createElement("li");
            color.className = "fila fuente_anuncios modelo";
            color.innerHTML = array_anuncios_json[x].color;
            lista.appendChild(color);
            
 
            let año = document.createElement("li");
            año.className = "fila fuente_anuncios modelo";
            año.innerHTML = array_anuncios_json[x].ano;
            lista.appendChild(año);
            
 
            let km = document.createElement("li");
            km.className = "fila fuente_anuncios modelo";
            km.innerHTML = array_anuncios_json[x].km +" Km" ;
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

