<?php
    $title= 'Add Product';
    require 'header.php';
    require 'functions.php'
?>

<h1><?php echo $title ?></h1>

<?php
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? '';
    $stock = $_POST['stock'] ?? '';
    $category = $_POST['category'] ?? '';
    $brand = $_POST['brand'] ?? '';
    $warranty = $_POST['guarantee'] ?? '';
    $shipping = $_POST['shipping'] ?? '';
    $description = $_POST['description'] ?? '';
    $errors = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    require 'validation.php';
     // Show errors
    if($errors !== ''){
        echo getAlert($errors, 'danger');
    } else {

        // User add a product
        require 'config.php';
        $link = mysqli_connect($db_host, $db_user , $db_pass, $db_dataBase);
        mysqli_set_charset($link , $db_charset);

        // Validate correct value of shipping
        if($shipping !== '1'){
            $shipping === '0';
        }

        $sql = "INSERT INTO productos (nombre, id_categoria, id_marca, precio, stock, garantia, detalles, envio, foto)
        VALUES
        ('$name', $category, $brand, $price, $stock, $warranty, '$description', $shipping, 'jpg');";
        
        mysqli_query($link, $sql);
        mysqli_close($link);

        echo getAlert('Product added successfully.', 'success');
        
        
        // Reset the inputs
        $name = '';
        $price = '';
        $stock = '';
        $category = '';
        $brand = '';
        $warranty = '';
        $shipping = '';
        $description = '';
    }
}

require 'formProduct.php';
require 'footer.php';
?>