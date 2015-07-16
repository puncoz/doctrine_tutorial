<?php
// create_product.php to insert products info into the database

require_once "bootstrap.php";

// reading argument from command-line
$newProductName = $argv[1];

$product = new Product();
$product->setName($newProductName);

// To notify the EntityManager that a new entity should be inserted into
// the database we have to call persist()
$entityManager->persist($product);
// To initiate a transaction to actually perform the insertion, We have to
// explicitly call flush() on the EntityManager
$entityManager->flush();

echo "Created Product with ID: " . $product->getId() . "\n";


// to run this code in command line
// $ php create_product.php SomeName
?>