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

        }

                    
            if(isset($_POST['submit'])){
            // Count total files
            $countfiles = count($_FILES['fotos']['name']);
            
            // Looping all files
            for($i=0;$i<$countfiles;$i++){
            $fotos = $_FILES['file']['name'][$i];
            
            // Upload file
            move_uploaded_file($_FILES['fotos']['tmp_name'][$i],__DIR__.'/../../../public/anuncios/'. $fotos);
                
            }
        } 
            

            //move_uploaded_file($directorio_fotos , __DIR__.'/../../../public/anuncios/'. $fotos);
            

        

            $stmt = $this->conn->prepare("INSERT INTO Anuncios (make_id,model_id,km,ano,precio,color,fotos) VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param("iiissss", $marca, $modelo, $km, $ano, $precio, $color, $fotos);
            $result = $stmt->execute();
            $stmt->close();
            return ($result);

        
        }



    }

}



?>