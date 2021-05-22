<?php

class comprarAnuncio extends Conexion implements ViewInterface, CrudInterface
{

    public function __construct()
    {
        parent::__construct();
        session_start();
    }


    public function get($id = null)
    {
    }

    public function show($id = null)
    {
    }

    public function update($values = null)
    {

        $id = $_GET["id"];
        $email = $_SESSION["loggedIn"];



        $stmt = $this->conn->prepare("UPDATE usuarios INNER JOIN anuncios SET usuarios.dinero = usuarios.dinero - anuncios.precio WHERE anuncios.id_anuncio = ? AND usuarios.email = ?");
        $stmt->bind_param("is", $id, $email);
        $result = $stmt->execute();
        $stmt->close();
        return ($result);
    }


    public function delete($id = null)
    {
        $id = $_GET["id"];



        $stmt = $this->conn->prepare("DELETE FROM anuncios WHERE anuncios.id_anuncio = ?");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        $stmt->close();
        return ($result);
    }

    public function add($values = null)
    {
        // $idPoblacion = $_POST["poblacion"];
        // $email = $_POST["email"];
        // $asunto = $_POST["asunto"];
        // $mensaje = $_POST["mensaje"];


        // $stmt = $this->conn->prepare("INSERT INTO usuarios(dinero) VALUES (?,?,?,?)");
        // $stmt->bind_param("isss", $idPoblacion, $email, $asunto, $mensaje);
        // $result = $stmt->execute();
        // $stmt->close();
        // return ($result);
    }
}
