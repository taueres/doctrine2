<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require 'boot.php';

return ConsoleRunner::createHelperSet(getEM());
