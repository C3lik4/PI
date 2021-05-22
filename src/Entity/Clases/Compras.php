<?php

class Compras extends Conexion implements CrudInterface
{
    public function __construct()
    {
        parent::__construct();
        session_start();
    }

    public function get()
    {
        return null;
    }

    public function add($values)
    {
        return null;
    }

    public function update($values = null)
    {
        $id = $_GET["id"];

        $stmt = $this->conn->prepare("UPDATE usuarios INNER JOIN anuncios SET usuarios.dinero = usuarios.dinero + anuncios.precio WHERE anuncios.id_usuario = ?");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        $stmt->close();
        return ($result);
    }

    public function delete($id)
    {
        return null;
    }
}
