<?php

define ("SERVER","localhost");

define ("USER","becompip_domo");

define ("PASS","JVfwzTGS6G?s");

define ("DB","becompip_domo");


$connect = mysqli_connect(SERVER,USER,PASS,DB);
$connect->set_charset("utf8");
if(!$connect)
{
    echo "connection not established due to ".mysqli_error($connect);
}else
{
   //echo "connection established";
}



?>