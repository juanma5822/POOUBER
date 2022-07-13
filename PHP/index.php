<?php

require_once('Car.php');
require_once('Account.php');
require_once('UberX.php');
require_once('UberPool.php');
require_once('User.php');
require_once('UberVans.php');

$uberx= new UberX("CPC07E",new Account("Juan Romero","1053844388","juan@gmail.com","12345678"),"Hyundai", "i35");
$uberx->setPassengers(4);  
$uberx-> PrintDataCar();


/*$uberpool = new UberPool("VQB11C",new Account("Laura Merchan",1053863398,"laura@gmail.com","12345678"),"Kymco","Agility Rs");
$uberpool-> PrintDataCar();

$user1 = new User("Manuel Sanchez",1053844388,"manuel@gmail.com",12345678);
$user1-> PrintDataUser();*/

$ubervans1 = new UberVans("OTJ584", new Account("Sofia Romero",456465456,"sofia@gmail.com",4564654),"Nissan","Versa");
$ubervans1->setPassengers(6);   
$ubervans1->PrintDataCar();

