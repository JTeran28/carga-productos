<?php 

require 'config.php';

$link = mysqli_connect($db_host, $db_user , $db_pass, $db_dataBase);
mysqli_set_charset($link , $db_charset);

$id_product = $_GET['id_producto'];

$sql = 'DELETE FROM productos WHERE id_producto = ' . $id_product;

$rs = mysqli_query($link , $sql);

mysqli_close($link);

header('Location: product_list.php');