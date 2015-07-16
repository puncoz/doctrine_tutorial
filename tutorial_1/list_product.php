<?php
// list_product.php to fetch a list of all the products.

require_once "bootstrap.php";

// The EntityManager#getRepository() method can create a finder object (called
// a repository) for every entity. It is provided by Doctrine and contains some
// finder methods such as findAll()
$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findAll();

foreach ($products as $product) {
	echo sprintf("-%s\n", $product->getName());
}

// to run this code in command line
// $ php list_product.php
?>