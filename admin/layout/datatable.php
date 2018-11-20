<?php

$user ='root';
$pass ='';
$db ='layout';

$db = new mysqli('localhost', $user , $pass , $db ) or die("Unable to Connect");

echo "Graet Work!!!";

?>