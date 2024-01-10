<?php 

require_once 'Product.php';
require_once 'Category.php';


try {
    $dbh = new PDO('mysql:host=localhost;dbname=draft-shop', 'root', '');

    $productId = 7;
    $query = 'SELECT * FROM product WHERE id = :id';
    $stmt = $dbh->prepare($query);
    $stmt->bindValue(':id', $productId, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $result ['picture'] = json_decode($result['picture']); 
    // var_dump($result);

    // header('Content-Type: application/json');
    // echo json_encode($result);
    // echo 'connect';
} catch (PDOException $e) {
    echo 'Erreur PDO : ' . $e->getMessage();
}

// var_dump($result);

$newProduct = new Product($result['id' ],$result['name'], $result['picture'], $result['price'], $result['description'], $result['quantity'], new Datetime($result['createdAt']),new DateTime($result['updatedAt']), $result['category_id']);
$newProduct->setPDO($dbh);
var_dump($newProduct);
$newCategory = $newProduct->getCategory();
var_dump($newCategory);