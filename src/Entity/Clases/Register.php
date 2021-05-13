<?php
class Register extends Conexion implements CrudInterface
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get($id = null)
    {
        return null;
    }

    public function show($id = null)
    {
        return null;
    }

    public function add($values = null)
    {
        $nombreUser = $_POST["Nombre"];
        $apellidoUser = $_POST["Apellidos"];
        $emailUser = $_POST["Email"];
        $phoneUser = $_POST["telefono"];
        $passUser = $_POST["password"];


        $stmt = $this->conn->prepare("INSERT INTO usuarios(nombre,apellidos,email,tlf,contrasena) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssis", $nombreUser, $apellidoUser, $emailUser, $phoneUser, $passUser);
        $result = $stmt->execute();
        $stmt->close();
        return ($result);
    }


    public function update($request)
    {
        return null;
    }
    public function delete($id)
    {
        return null;
    }
}
