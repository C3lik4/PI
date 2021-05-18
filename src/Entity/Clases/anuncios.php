<?php

class anuncios extends Conexion implements ViewInterface{

    public function get($id = null){

        $sql = "SELECT * FROM `anuncios`";
    }

    public function show($id = null){

    }
}

?>