<?php
require_once 'job01.php';

$product = new Product(7,'mehdi',['image.jpg'],'120€','lorem ipsum','1',new DateTime('now'),new DateTime('now'),1);
// $product = new Product();
$product->setId('3');
$id_product = $product->getId();
var_dump($product);
var_dump($id_product);

?>