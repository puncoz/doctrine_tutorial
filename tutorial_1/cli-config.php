<?php 
// cli-config.php

require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

// run this in command line
// $ vendor/bin/doctrine orm:schema-tool:create
// $ vendor/bin/doctrine orm:schema-tool:update --force
// $ vendor/bin/doctrine orm:schema-tool:drop --force
// $ vendor/bin/doctrine orm:schema-tool:update --force --dump-sql
?>