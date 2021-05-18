<?php

class anuncios extends Conexion implements ViewInterface{

    public function get($id = null){

        $sql = "SELECT * FROM anuncios";
        $resultado = $this->conn->query($sql);
        return $resultado;
    }

    public function show($id = null){

        $anuncios = $this->get();

        $array_anuncios = $anuncios->fetch_all(MYSQLI_ASSOC);

        return $array_anuncios;
    }
}

?>