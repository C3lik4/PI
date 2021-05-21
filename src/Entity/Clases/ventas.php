<?php



class ventas extends Conexion implements crudInterface
{

    public function __construct()
    {

        parent::__construct();
        session_start();
    }

    public function get()
    {
        $email = $_SESSION["loggedIn"];
        $sql = "SELECT usuarios.id FROM usuarios WHERE email = '$email'";
        echo $sql;
        $result = $this->conn->query($sql);
        return  $result;
    }


    public function update($values = null)
    {
    }

    public function delete($id = null)
    {
    }

    //agafar timestamp y numero aleatori per a fer identificador de foto de coche
    public function add($values = null)
    {
        if (count($_POST) > 0) {


            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $color = $_POST["color"];
            $ano = $_POST["ano"];
            $km = $_POST["km"];
            $precio = $_POST["precio"];
            $userId = $this->get();


            $fotos = $_FILES["fotos"]["name"];
            $ext = explode(".", $fotos);
            $nombre = time() . "img" . random_int(100, 999) . "." . $ext[1];
            $directorio_fotos = $_FILES["fotos"]['tmp_name'];

            move_uploaded_file($directorio_fotos, __DIR__ . '/../../../public/anuncios/' . $nombre);
        }

        $stmt = $this->conn->prepare("INSERT INTO anuncios(make_id,id_usuario,model_id,km,ano,precio,color,foto) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("iiiiisss", $marca, $userId, $modelo, $km, $ano, $precio, $color, $nombre);
        $result = $stmt->execute();
        $stmt->close();
        return ($result);
    }
}
