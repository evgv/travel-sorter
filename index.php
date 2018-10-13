<?php

require_once __DIR__ . '/vendor/autoload.php';

use src\Sorter;

include_once('data.php');

$sorter = new Sorter($data); // Init 
$sorter->sort(); // Sort them
$sorter->printRoute(); // Display