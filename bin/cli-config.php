<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

$entityManager = require 'boot.php';

return ConsoleRunner::createHelperSet($entityManager);
