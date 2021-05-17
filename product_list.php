<?php
    $title = 'Product List';
    require 'header.php';
?>

<h1><?php echo $title ?></h1>

<table class="table-responsive table-hover table-striped table-sm">
    <tr>
        <th>Brand</th>
        <th>Product</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Shipping</th>
        <th>Actions</th>
    </tr>

<?php

require 'config.php';

$link = mysqli_connect($db_host, $db_user , $db_pass, $db_dataBase);
mysqli_set_charset($link , $db_charset);

$sql = 'SELECT 
id_producto,
p.nombre,
m.nombre AS Brand,
sitio_web AS Website,
c.nombre AS Category,
garantia,
detalles,
stock,
envio,
precio 
FROM productos p
  JOIN categorias c ON p.id_categoria = c.id_categoria
  JOIN marcas m ON p.id_marca = m.id_marca';
$rs = mysqli_query($link, $sql);
$rowNumbers = mysqli_num_rows($rs);

mysqli_close($link);

while($productRow = mysqli_fetch_assoc($rs)){
    ?>
    <tr>
        <td> <a href="<?= $productRow['Website']?>" target="_blank"><?= $productRow['Brand'] ?></a></td>
        <td> 
            <p>
                <span class="h5">
                    <?= $productRow['nombre'] ?>

                    <small class="text-muted">
                     -
                        <?= $productRow['Category'] ?>
                    </small>
                </span>
                -
                Warranty: <?= $productRow['garantia'] ?> Months 
            </p>
            <?= $productRow['detalles'] ?>
        </td>
        <td class="text-right">$<?= number_format($productRow['precio'], '2',',','.') ?></td>
        <td class="text-right"><?= $productRow['stock'] ?></td>
        <td class="text-center">
            <?php 
                if($productRow['envio'] === "1"){
                echo "Yes";
                } else{
                    echo "-";
                }     
            ?>
        </td>
        <td>
            Edit
            <a href="delete_product.php?id_producto=<?= $productRow['id_producto'] ?>">Delete</a>
        </td>
    </tr>
    <?php    
}

?>
<tr class="bg-dark text-light text-center">
    <td colspan="6">Product's quantity: <?= $rowNumbers ?></td>
</tr>
</table>

<?php
    require 'footer.php';