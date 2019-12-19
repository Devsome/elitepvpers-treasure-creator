<?php

include('TreasureManager.php');
include('Treasure.php');


$tm = new TreasureManager('Username', 'Password');

$treasure = new Treasure();
$treasure->setTitle('Treasure');
$treasure->setContent('Content');
$treasure->setCost(1);

$tm->createTreasure($treasure);

