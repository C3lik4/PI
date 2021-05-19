<?php

class cartera extends Conexion implements ViewInterface,CrudInterface{

    public function get($id = null){
        $email = $_SESSION["loggedIn"];
        $sql = "SELECT dinero FROM usuarios WHERE email = '$email'";
        $resultado = $this->conn->query($sql);

        return $resultado;


    }

    public function update($values = null){

        $dinero = $_POST["dinero"];
        $email = $_SESSION["loggedIn"];


        $stmt = $this->conn->prepare("UPDATE usuarios SET dinero = ? WHERE email = $email");
        $stmt->bind_param("i",$dinero);
        $result = $stmt->execute();
        $stmt->close();
        return ($result);

    }

    public function delete($id = null){

    }

    public function add($values = null){

    }

    public function show($id = null){

        $dinero = $this->get();

        return $dinero;

    }




}
