<?php

class ventas extends Conexion implements crudInterface{

    public function get(){

    }


    public function update($values = null){

    }

    public function delete($id = null){

    }

    //agafar timestamp y numero aleatori per a fer identificador de foto de coche
    public function add($values = null){
        if (count($_POST) > 0) {
        

            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $color = $_POST["color"];
            $ano = $_POST["ano"];
            $km = $_POST["km"];
            $precio = $_POST["precio"];

            $fotos = $_FILES["fotos"]['name'];
            $directorio_fotos = $_FILES["fotos"]['tmp_name'];

             move_uploaded_file($directorio_fotos , __DIR__.'/../../../public/anuncios/'. $fotos);

        }

            $stmt = $this->conn->prepare("INSERT INTO anuncios (make_id,model_id,km,ano,precio,color,foto) VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param("iiiisss", $marca, $modelo, $km, $ano, $precio, $color,$fotos);
            $result = $stmt->execute();
            $stmt->close();
            return ($result);

        
        



    }

}



?>