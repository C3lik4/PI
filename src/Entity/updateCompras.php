<?php
include_once("autoloader.php");

$cartera = new Compras();
echo json_encode($cartera->update());

?>