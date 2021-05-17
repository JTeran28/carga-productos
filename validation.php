<?php

if($name === ''){
    $errors .= 'The name cannot be empty.<br>';
}else if (strlen($name) < 3){
    $errors .= 'The name must have at least 3 characters.<br>';
}elseif(strlen($name) > 20){
    $errors .= 'The name must have less than 20 characters.<br>';
}


if($price === ''){
    $errors .= 'The price cannot be empty.<br>';
}else if(!is_numeric($price)){
    $errors .= 'The price must be a number.<br>';
}else if($price < 0){
    $errors .= 'The price must be a positive number.<br>';
}

if($stock === ''){
    $errors .= 'The stock cannot be empty.<br>';
}else if(!is_numeric($stock)){
    $errors .= 'The stock must have a number value.<br>';
} else {
    $stock += 0;
    if(!is_int($stock)){
        $errors .= 'The stock must be a whole number. <br>';
    }
}

$valid_categories = ['1','2','3','4'];

if($category === ''){
    $errors .= "The category cannot be empty.<br>";
}else if (!in_array($category, $valid_categories)){
    $errors .= "The category is not valid. <br>";
} 

$valid_brands = ['1','2','3','4'];

if($brand === ''){
    $errors .= "The brand cannot be empty.<br>";
}else if (!in_array($brand, $valid_brands)){
    $errors .= "The brand is not valid. <br>";
} 



if($warranty === ''){
    $errors .= "Warranty cannot be empty.<br>";
}else{
    $valid_warranty = ['6','12','24'];
    if(!in_array($warranty, $valid_warranty)){
        $errors .= "Warraty is not valid. <br>";
    }
} 


$descriotionMinLong = 5;
$descriotionMaxLong = 500;
if ($description === '') {
    $errors .= 'The description cannot be empty.<br>';
} elseif(strlen($description) < $descriotionMinLong) {
    $errors .= "The description must have at least $descriotionMinLong characters.<br>";
} elseif(strlen($description) > $descriotionMaxLong) {
    $errors .= "The description must have less than $descriotionMaxLong characters.<br>";
}



