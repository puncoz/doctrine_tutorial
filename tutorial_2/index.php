<?php

require_once "includes/bootstrap.php";
require_once "entities/Dojo.php";
require_once "entities/Starter.php";

$dojoRepo = $entityManager->getRepository('Dojo');
$starterRepo = $entityManager->getRepository('Starter');

$dojos = $dojoRepo->findAll();
$starters = $starterRepo->findAll();

echo '<table border="1">';
echo '<tr>
		<th>id</th>
		<th>name</th>
		<th>dojo-id</th>
		<th>dojo-name (referenced from dojos)</th>
	</tr>';
foreach($starters as $starter) {
	$id = $starter->getId();
	$name = $starter->getName();
	$dojoId = $starter->getDojo();
	$dojo = $entityManager->find('Dojo', $dojoId);
	$dojoName = $dojo->getName();
	echo '<tr>';
	echo sprintf("<td>%s</td><td>%s</td><td>%s</td><td>%s</td>", $id, $name, $dojoId, $dojoName);
	echo '</tr>';
}
echo '</table>';

echo '<br><br>';

echo '<table border="1">';
echo '<tr>
		<th>id</th>
		<th>name</th>
	</tr>';
foreach($dojos as $dojo) {
	$id = $dojo->getId();
	$name = $dojo->getName();
	echo '<tr>';
	echo sprintf("<td>%s</td><td>%s</td>", $id, $name);
	echo "</tr>";
}
echo '</table>';

?>