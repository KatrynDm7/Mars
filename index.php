<?php

include_once 'Rover.php';
include_once 'IData.php';
include_once 'Data.php';

$rover = new Rover();
$data = new Data($rover);
$data->setInfo('input.txt');
$data->printDetails();