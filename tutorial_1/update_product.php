<?php
// update_product.php to update the product info

require_once "bootstrap.php";

$id = $argv[1];
$newName = $argv[2];

$product = $entityManager->find('Product', $id);

if ($product === null) {
	echo "Product $id does not exist.\n";
	exit(1);
}

$product->setName($newName);

$entityManager->flush();

// to run this code in command line
// $ php update_product.php 1 Mobile
?>