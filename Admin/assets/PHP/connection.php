<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "izmirde_emlak";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Veritabanı Çalışmıyor!");
}
