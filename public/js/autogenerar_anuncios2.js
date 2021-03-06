document.addEventListener("DOMContentLoaded", main);

function main() {


    cargar_anuncios();
    //comprarAnuncio();


    function cargar_anuncios() {

        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener("readystatechange", function () {
            if (this.readyState == 4 && this.status == 200) {

                rellenador_anuncios(JSON.parse(this.responseText));
            }
        });

        xhttp.open("GET", "../src/Entity/showAnuncios.php", true);
        xhttp.send();


    }

   

    function rellenador_anuncios(array_anuncios_json) {


        //modal();



        let contenedor_anuncios = document.getElementById("contenedor");


        for (let z = 0; z < array_anuncios_json.length; z = z + 3) {

            let fila_tarjeta = document.createElement("div");
            fila_tarjeta.className = "row";
            contenedor_anuncios.appendChild(fila_tarjeta);



            for (let x = z; (x < z + 3) && (x < array_anuncios_json.length); x++) {


                let primer_div = document.createElement("div");
                primer_div.className = "col-lg-4 col-md-6 mb-4";
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
                precio.innerHTML = array_anuncios_json[x].precio + " ???";
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


                let a??o = document.createElement("li");
                a??o.className = "fila fuente_anuncios modelo";
                a??o.innerHTML = array_anuncios_json[x].ano;
                lista.appendChild(a??o);


                let km = document.createElement("li");
                km.className = "fila fuente_anuncios modelo";
                km.innerHTML = array_anuncios_json[x].km + " Km";
                lista.appendChild(km);


                let footer = document.createElement("div");
                footer.className = "card-footer center fuente_navbar";
                segundo_div.appendChild(footer);

                let boton = document.createElement("button");
                boton.className = "btn btn--radius-2 btn--red";
                boton.id = "botonCompra";
                
                boton.innerHTML = "COMPRAR";

                function updateCompras() {

                    const xhttp = new XMLHttpRequest();
                    xhttp.addEventListener("readystatechange", function () {
                        if (this.readyState == 4 && this.status == 200) {

                        }
                    });
                    xhttp.open("GET", "../src/Entity/updateCompras.php?id=" + boton.value, true);
                    xhttp.send();


                }

                function deleteAnuncios() {

                    const xhttp = new XMLHttpRequest();
                    xhttp.addEventListener("readystatechange", function () {
                        if (this.readyState == 4 && this.status == 200) {

                        }
                    });
                    xhttp.open("GET", "../src/Entity/deleteAnuncios.php?id=" + boton.value, true);
                    xhttp.send();


                }

                function restarDinero() {

                    const xhttp = new XMLHttpRequest();
                    xhttp.addEventListener("readystatechange", function () {
                        if (this.readyState == 4 && this.status == 200) {

                        }
                    });
                    xhttp.open("GET", "../src/Entity/showcomprarAnuncio.php?id=" + boton.value, true);
                    xhttp.send();


                }

                function updateAnuncios() {

                    let datosAnteriores = document.getElementById("contenedor");
                    while (datosAnteriores[0]) {
                        datosAnteriores[0].parentNode.removeChild(datosAnteriores[0]);
                    }
                }

                boton.addEventListener("click", function (e) {
                    console.log(boton.value);
                    restarDinero();
                    deleteAnuncios();
                    updateAnuncios();
                })

                footer.appendChild(boton);


                //console.log(boton.value);


            }

        }

    }

}

