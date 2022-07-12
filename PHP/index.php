<?php

require_once('Car.php');
require_once('Account.php');
require_once('UberX.php');
require_once('UberPool.php');
require_once('User.php');

$uberx= new UberX("CPC07E",new Account("Juan Romero","1053844388","juan@gmail.com","12345678"),"Hyundai", "i35");
$uberx-> PrintDataCar();


$uberpool = new UberPool("VQB11C",new Account("Laura Merchan",1053863398,"laura@gmail.com","12345678"),"Kymco","Agility Rs");
$uberpool-> PrintDataCar();

$user1 = new User("Manuel Sanchez",1053844388,"manuel@gmail.com",12345678);
$user1-> PrintDataUser();

