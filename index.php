<?php
require 'vendor/autoload.php';

$logger = new Project\Psr4includeSample\Utils\Logger();
$logger->log("This is a log message.");
