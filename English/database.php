<?php
/*$db_host = 'localhost';
$db_name = 'willimsuvsyndrom';
$db_user = 'root';
$db_pass = '';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if($mysqli->connect_error) {
    printf("Pripojeni selhalo %s\n", $mysqli->connect_error);
    exit();
}*/
$dab=mysqli_connect('localhost','root','','willimsuvsyndrom');
if(!$dab){
    die(mysqli_error("Error"+$dab));
}