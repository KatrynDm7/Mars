<?php
include_once 'IProvider.php';
include_once 'FileProvider.php';
include_once 'Logic.php';
include_once 'IRover.php';
include_once 'Rover.php';

$provider = new FileProvider();
$logic = new Logic($provider);
$rover = new Rover($logic);
$rover->setInfo('input.txt');
$rover->printDetails();