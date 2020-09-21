<?php

/*
This file contains database configs assuming we are running mysql using user "root" and password ""
 */

 define('DB_SERVER','localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','login');

 // Try connecting to database
 $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

 //Check connection status
 if ($conn === false)
 {
     dir('Error: Cant connect');
 }


?>