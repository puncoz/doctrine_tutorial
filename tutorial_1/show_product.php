<?php
// show_product.php <id>
require_once "bootstrap.php";

// reading argument from command-line
$id = $argv[1];

$product = $entityManager->find('Product', $id);

if ($product === null) {
	echo "No Product Found.\n";
	exit(1);
}

echo sprintf("-%s\n", $product->getName());

// to run this code in command line
// $ php show_product.php 1
?>